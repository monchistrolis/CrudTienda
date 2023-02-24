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
                    <div class="col-md-2 mb-3">
                        <label for="">Nombre</label>
                        @foreach ($pedidos as $info)
                            <p class="text center">{{ $info->nombre }}</p>
                            <hr class="">
                        @endforeach
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="">Apellido</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->apellido }}</p>
                            <hr class="">
                        @endforeach
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="">Categoria</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->producto }}</p>
                            <hr class="">
                        @endforeach
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="">Fecha</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->fecha }}</p>
                            <hr class="">
                        @endforeach
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Codigo de Autorizacion</label>
                        @foreach ($pedidos as $info)
                            <p>{{ $info->firma }}</p>
                            <hr class="">
                        @endforeach
                    </div>
                </div>
            </form>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between mt-5">
                        <a href="{{route('pedido.pdf')}}" class="btn btn-outline-dark btn-lg">Descargar en Pdf</a>
                        <a class="btn btn-outline-dark btn-lg" href="/pedidos"> Ver Pedidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
