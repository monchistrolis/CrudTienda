<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PedidosController extends Controller
{

    public function index()
    {
        //pagina de inicio
        $pedidos = Pedido::all();
        return view('verpedido', compact('pedidos'));
        return view('verpedido');

    }

    public function pdf()
    {
        $pedidos= Pedido::orderby('nombre', 'desc')->paginate(10);
        $pdf = Pdf::loadView('pdfpedidos', ['pedidos' =>$pedidos]);
        return $pdf->stream();

        //return view('pdf', compact('datos'));
    }


    public function create( )
    {
        //formulacio para agregar datos
        return view('pedidos');
    }


    public function store(Request $request)
    {
        //guardar datos en la BD
        $pedido = new Pedido();
        $pedido->nombre = $request->post('nombre');
        $pedido->apellido = $request->post('apellido');
        $pedido->email = $request->post('email');
        $pedido->telefono = $request->post('telefono');
        $pedido->direccion = $request->post('direccion');
        $pedido->producto = $request->post('categoria');
        $pedido->cantidad = $request->post('cantidad');
        $pedido->proveedor = $request->post('proveedores');
        $pedido->fecha = $request->post('fecha');
        $pedido->firma = $request->post('firma');
        $pedido->observaciones = $request->post('observaciones');
        $pedido->save();
        return redirect()->route('pedido.create')->with('mensaje', 'Pedido realizado con exito');
        //mensaje que dure 3 segundo
    }


    public function show($id)
    {
        //optencio de registro de la tabla

    }


    public function edit($id)
    {
        //trae los datos y se van a editar y los coloca en un formulario

    }


    public function update(Request $request, $id)
    {
        //actualiza los datos de la BD
    }


    public function destroy($id)
    {
        //elimina los datos de la BD
    }
}
