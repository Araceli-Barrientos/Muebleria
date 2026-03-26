<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('welcome', compact('productos'));
    }

    public function colecciones()
    {
        $productos = Producto::all();
        return view('colecciones', compact('productos'));
    }

    public function pedido()
    {
        return view('pedido');
    }

    public function enviarPedido(Request $request)
{
    $datos = $request->all();

    Mail::raw("
    Nuevo pedido:

    Nombre: {$datos['nombre']}
    Dirección: {$datos['direccion']}
    Teléfono: {$datos['telefono']}
    Email: {$datos['email']}
    Mensaje: {$datos['mensaje']}
    ", function ($message) {
        $message->to('aracelibarrientos766@gmail.com')
                ->subject('Nuevo pedido desde la web');
    });

    return back()->with('success', 'Pedido enviado correctamente');
}
}
