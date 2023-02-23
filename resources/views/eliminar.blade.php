@extends('welcome')
@section('base')
    <div class="card">
        <h5 class="card-header">
            eliminar Productos
        </h5>
        <div class="card-body">
            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Imagen</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{$productos->nombre}}</td>
                            <td>{{$productos->descripcion}}</td>
                            <td>{{$productos->categoria}}</td>
                            <td>{{$productos->precio}}</td>
                            <td><img src="{{ asset('images') . '/' . $productos->imagen }}" alt="" width="100px"></td>
                        </tr>
                    </tbody>
                </table>
                <form action="{{ route('productos.destroy',$productos->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="  d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger m-1" style="width: 200px">Eliminar</button>
                        <a class="btn btn-success m-1" style="width: 200px" href="{{ route('productos.create') }}">volver</a>
                    </div>

                </form>
            </div>
            </p>
        </div>


    </div>
@endsection

