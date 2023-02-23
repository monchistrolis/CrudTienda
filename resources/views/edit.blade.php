@extends('welcome')
@section('base')
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <br>
            <form action="{{ route('productos.update', $productos->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-center">
                    <h2>
                        Actualizacion de Producto
                    </h2>
                </div>

                <div class="form-group">
                    <label for="">Nombre Producto</label>
                    <input type="text" name="nombre" class="form-control" required value="{{ $productos->nombre }}"
                        placeholder="Nombre del producto a ingresar">
                </div>
                <div class="form-group">
                    <label for="">Descripcion del Producto</label>
                    <input type="text" name="descripcion" class="form-control" required
                        value="{{ $productos->descripcion }}" placeholder="ingresar una breve descripcion del producto">
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
                    <input type="text" name="precio" class="form-control" required value="{{ $productos->precio }}"
                        placeholder=" Preciod el producto ">
                </div>
                <div class="form-group">
                    <label for="">Imagen</label>
                    <input type="file" name="imagen" class="form-control" required value="{{ $productos->imagen }}">
                </div>
                <div class=" col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-dark btn-lg" style="width: 300px">Actualizar</button>
                </div>

            </form>
        </div>
    @endsection
