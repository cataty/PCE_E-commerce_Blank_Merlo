<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewCarrito() {
        {
    $userId = auth()->id();

    $items = CartItem::where('user_id', $userId)
        ->with('producto') // Carga los datos del producto
        ->get();

    return view('carrito', compact('items'));  
}
    }

    
    public function agregar(Request $request) {
        
    $request->validate([
        'producto_id' => 'required|exists:productos,producto_id',
        'cantidad' => 'required|integer|min:1',
    ]);

    $userId = auth()->id();
    $productoId = $request->input('producto_id');
    $cantidad = $request->input('cantidad');

    // Verificar si el producto ya está en el carrito
    $item = CartItem::where('user_id', $userId)
        ->where('producto_id', $productoId)
        ->first();

    if ($item) {
        // Ya existe: sumar cantidad
        $item->cantidad += $cantidad;
        $item->save();
    } else {
        // No existe: crear nuevo
        CartItem::create([
            'user_id' => $userId,
            'producto_id' => $productoId,
            'cantidad' => $cantidad,
        ]);
    }

    return redirect()->route('carrito.ver')->with('success', 'Producto agregado al carrito');
    }



    public function vaciar() {
       
        $userId = auth()->id();

    CartItem::where('user_id', $userId)->delete();

    return redirect()->route('carrito.ver')->with('success', 'Carrito vaciado con éxito');
    }


    public function eliminar($id) {
    $item = CartItem::findOrFail($id);

    // Confirmar que el ítem le pertenece al usuario logueado
    if ($item->user_id != auth()->id()) {
        abort(403);
    }

    $item->delete();

    return redirect()->route('carrito.ver')->with('success', 'Producto eliminado del carrito.');
    }


    // aumentar y disminuir cantidad de productos en el carrito
    public function aumentarCantidad($id) {
    $item = CartItem::findOrFail($id);

    if ($item->user_id !== auth()->id()) {
        abort(403);
    }

    $item->cantidad += 1;
    $item->save();

    return redirect()->route('carrito.ver')->with('success', 'Cantidad aumentada');
}

    public function disminuirCantidad($id) {
    $item = CartItem::findOrFail($id);

    if ($item->user_id !== auth()->id()) {
        abort(403);
    }

    if ($item->cantidad > 1) {
        $item->cantidad -= 1;
        $item->save();
    } else {
        $item->delete();
    }

    return redirect()->route('carrito.ver')->with('success', 'Cantidad disminuida');
}




    };
