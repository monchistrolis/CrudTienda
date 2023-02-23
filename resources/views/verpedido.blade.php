@extends('welcome')
@section('base')
    <div class="container d-flex justify-content-center mt-4">
        <h1>Pedidos Realizados</h1>
    </div>
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <br>
            <form action="" method="">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="">Nombre</label>
                        @foreach ($pedidos as $info)
                            <p class="text center">{{ $info->nombre }}</p>
                        @endforeach


                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Apellido</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->apellido }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Email</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->email }}</p>
                        @endforeach
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="">Telefono</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->telefono }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="">Direccion</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->direccion }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="">categoria</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->producto }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Cantidad</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->cantidad }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Proveedor</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->proveedor }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="">Fecha de Emision</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->fecha }}</p>
                        @endforeach
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Firma</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->firma }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="">Observaciones</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->observaciones }}</p>
                        @endforeach
                    </div>

                </div>
            </form>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-5">
                        <a href="{{route('pedido.pdf')}}" class="btn btn-outline-dark btn-lg">Descargar en Pdf</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
