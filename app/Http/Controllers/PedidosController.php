<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{

    public function index()
    {
        //pagina de inicio

    }


    public function create( )
    {
        //formulacio para agregar datos
        return view('pedidos');
    }


    public function store(Request $request)
    {
        //guardar datos en la BD

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
