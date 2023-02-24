@extends('navbar.footer')
@extends('navbar.navbar')

@section('base')
    <div class="container d-flex justify-content-center mt-4">
        <h1>Realizador de pedidos</h1>
    </div>
    <hr class="container">
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <br>
            <form  action="{{route('pedido.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre"
                         placeholder="Nombre de Encargado"
                         required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" name="apellido"
                         placeholder="Apellido de Encargado"
                         required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email"
                         placeholder="Email de Encargado"
                         required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" name="telefono"
                         placeholder="Telefono de Local"
                         required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="">Direccion</label>
                        <input type="text" class="form-control" name="direccion"
                         placeholder="Direccion de Local"
                         required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="">categoria</label>
                        <select class="custom-select " name="categoria">
                            <option selected>Producto a Comprar</option>
                            <option value="GuitarrasElectricas">Guitarras Electricas</option>
                            <option value="GuitarrasElectricas">Guitarras Electricas</option>
                            <option value="Bajos">Bajos</option>
                            <option value="Baterias">Baterias</option>
                            <option value="Pianos">Pianos</option>
                            <option value="Teclados">Teclados</option>
                            <option value="Amplificadores">Amplificadores</option>
                            <option value="Accesorios">Accesorios</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad"
                         placeholder="Cantidad de Productos"
                         required>
                    </div>
                    <div class="col-md-4 mb-3" >
                        <label for="">Proveedor</label>
                        <select class="custom-select " name="proveedores">
                            <option selected>Producto a Comprar</option>
                            <option value="GuitarCenter">Guitar Center</option>
                            <option value="Musimundo">Musimundo</option>
                            <option value="SamAshMusicStores">Sam Ash Music Stores</option>
                            <option value="MusiciansFriend">Musician's Friend</option>
                            <option value="Sweetwater">Sweetwater</option>
                            <option value="Thomann">Thomann</option>
                            <option value="Gibson">Gibson</option>
                            <option value="Fender">Fender</option>
                            <option value="B&HPhotoVideoProAudio">B&H Photo Video Pro Audio</option>
                            <option value="Zzounds">Zzounds</option>
                            <option value="Reverb">Reverb</option>
                            <option value="Amazon">Amazon</option>
                            <option value="eBay">eBay</option>
                            <option value="Craigslist">Craigslist</option>
                            <option value="Music&Arts">Music & Arts</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Fecha de Emision</label>
                        <input type="date" class="form-control" name="fecha"
                         placeholder="Fecha de Emision"
                         required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Firma</label>
                        <input type="text" name="firma" class="form-control"
                         placeholder="codigo de pedido"
                         required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="">Observaciones</label>
                        <textarea class="form-control" name="observaciones" rows="3"></textarea>
                    </div>
                <div class=" col-12 d-flex justify-content-between mb-5 mt-5">
                    <button class="btn btn-outline-dark btn-lg" style="width: 300px">Enviar Pedido</button>
                    <a class="btn btn-outline-dark btn-lg" href="{{route('pedido.index')}}"> Ver Pedidos</a>
                </div>

            </form>
        </div>
    </div>
@endsection
