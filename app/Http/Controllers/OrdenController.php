<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

use App\Models\CartItem;
use App\Models\Orden;
use App\Models\OrdenItem;



class OrdenController extends Controller
{
   public function checkout()
    {
        $userId = auth()->id();

        $items = CartItem::where('user_id', $userId)
            ->with('producto')
            ->get();

        if ($items->isEmpty()) {
            return redirect()->route('carrito.ver')->with('warning', 'Tu carrito está vacío');
        }

        // Crear la orden
        $orden = Orden::create([
            'user_id' => $userId,
            'fecha' => now(),
            'total' => $items->sum(function ($item) {
                return $item->cantidad * $item->producto->precio;
            }),
        ]);

        // Guardar los items
        foreach ($items as $item) {
            OrdenItem::create([
                'orden_id' => $orden->id,
                'producto_id' => $item->producto_id,
                'cantidad' => $item->cantidad,
                'precio_unitario' => $item->producto->precio,
            ]);
        }

        // Vaciar carrito
        CartItem::where('user_id', $userId)->delete();

        return redirect()->route('gracias')->with('success', '¡Compra realizada con éxito!');
    }

    // Ver ordenes del usuario
    public function verOrdenes($userId)
    {
        $user = \App\Models\User::with('ordenes.ordenItems.producto')->findOrFail($userId);
        $ordenItems = $user->ordenes->flatMap->ordenItems;
        return view('ordenes', compact('user', 'ordenItems'));
    }
}
