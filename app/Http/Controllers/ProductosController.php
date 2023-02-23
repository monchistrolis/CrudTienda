<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        //pagina de inicio

        return view('welcome');
    }


    public function create()
    {
        //formulacio para agregar datos
        $datos= Productos::orderby('nombre', 'desc')->paginate(10);
        return view('stock', compact('datos'));
    }


    public function store(Request $request)
    {
        //guardar datos en la BD
        $productos = new Productos();
        $productos->nombre = $request->post('nombre');
        $productos->descripcion = $request->post('descripcion');
        $productos->categoria = $request->post('categoria');
        $productos->precio = $request->post('precio');
        $productos->imagen = $request->post('imagen');
        $productos->save();
        return redirect()->route('productos.create')->with("success","El producto se agregado correctamente!!");

    }


    public function show($id)
    {
        //optencio de registro de la tabla
        $productos = Productos::find($id);
        return view('eliminar',compact('productos'));
    }


    public function edit($id)
    {
        //trae los datos y se van a editar y los coloca en un formulario
        $productos = Productos::find($id);
        return view ('edit', compact('productos'));

    }


    public function update(Request $request, $id)
    {
        //actualiza los datos de la BD
        $productos = Productos::find($id);
        $productos->nombre = $request->post('nombre');
        $productos->descripcion = $request->post('descripcion');
        $productos->categoria = $request->post('categoria');
        $productos->precio = $request->post('precio');
        $productos->imagen = $request->post('imagen');
        $productos->save();
        return redirect()->route('productos.create')->with("success","El producto se actualizo correctamente!!");
    }


    public function destroy($id)
    {
        //elimina un registro
        $productos = Productos::find($id);
        $productos->delete();
        return redirect()->route('productos.create')->with("success","El producto se elimino correctamente!!");
    }
}
