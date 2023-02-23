@extends('welcome')
@section('base')
<div class="container d-flex justify-content-center mt-4">
    <h1>Segmento de Inventario</h1>
</div>
<hr class="container">
    <div class="container mt-5">
        <div class="">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">Agregar Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">Productos en Inventario</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="home">
                    <br>
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nombre Producto</label>
                            <input type="text" name="nombre" class="form-control"
                                placeholder="Nombre del producto a ingresar">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion del Producto</label>
                            <textarea type="text" name="descripcion" class="form-control" rows="6"
                                placeholder="ingresar una breve descripcion del producto">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Categoria</label>
                            <select class="custom-select" name="categoria">
                                <option selected>Categoria a la que pertenece el producto</option>
                                <option value="1">Guitarras</option>
                                <option value="2">Bajos</option>
                                <option value="3">Baterias</option>
                                <option value="4">Pianos</option>
                                <option value="5">Teclados</option>
                                <option value="6">Amplificadores</option>
                                <option value="7">Accesorios</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" name="precio" class="form-control" placeholder=" Preciod el producto ">
                        </div>
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>
                        <div class=" col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-dark btn-lg" style="width: 300px">Agregar</button>
                        </div>

                    </form>
                </div>
                <div class="tab-pane container fade" id="menu1">
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->descripcion }}</td>
                                    <td>{{ $item->categoria }}</td>
                                    <td>{{ $item->precio }}</td>
                                    <td><img class="rounded-lg" src="{{ asset('images') . '/' . $item->imagen }}" alt=""
                                            width="100px"></td>

                                    <td><a
                                            href="{{ route('productos.edit', $item->id) }}"class="btn btn-outline-dark">Editar</a>
                                    </td>

                                    <td><a
                                            href="{{ route('productos.show', $item->id) }}"class="btn btn-outline-dark">Eliminar</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            {{ $datos->links() }}
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <a href="{{route('productos.pdf')}}" class="btn btn-outline-dark btn-lg">Descargar en Pdf</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--confirmacion de producto agregado correctamente-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <strong> {{ $mensaje }} </strong>

                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
