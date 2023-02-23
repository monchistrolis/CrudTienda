@extends('navbar.navbar')
@section('base')
 <!--start Carrusel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/t2.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/c1.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/c3.jpg" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="/images/" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end Carrusel -->
    <!--start cards-->
    <div class="card-deck">
        <div class="card m-2">
            <img class="card-img-top" src="/images/g7.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">EL LEGADO DE PRS GUITARS: EL MÍTICO SONIDO DE UN LUTHIER QUE FUSIONÓ LO MEJOR DE
                    GIBSON Y FENDER
                </h5>
                <p class="card-text">La marca de guitarras diseñada por un luthier norteamericano lleva consigo parte de
                    su historia personal.</p>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-dark text-dark" href="#">ver mas</a>
                </div>
            </div>
        </div>
        <div class="card m-2">
            <img class="card-img-top" src="/images/u1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">5 RAZONES POR LAS QUE TE ENCANTARÁ TOCAR UN UKELELE

                </h5>
                <p class="card-text">Los ukeleles permiten introducirte en el mundo de la
                    música de manera más rápida y efectiva. Una sensación muy estimulante</p>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-dark text-dark" href="#">ver mas</a>
                </div>
            </div>
        </div>
        <div class="card m-2">
            <img class="card-img-top" src="/images/t1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">ROLAND: REDEFINIENDO LA INDUSTRIA MUSICAL DESDE 1972 PT. I
                </h5>
                <p class="card-text">Déjate llevar por la nostalgia de su medio siglo
                    de historia y acompáñanos a revivir grandes hitos de su paso por la industria musica</p>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-dark text-dark" href="#">ver mas</a>
                </div>
            </div>
        </div>
    </div>
    <!--start footer-->
    <footer class="page-footer bg-dark font-small blue pt-4 text-white">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-3 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Nosotros</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Illo reprehenderit aliquam provident sunt neque officia,
                        dicta numquam minima quidem! Quae obcaecati incidunt reiciendis
                        ratione ut quibusdam numquam voluptate iure ipsam.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Redes Sociales</h5>
                    <ul class="list-unstyled ">
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Facebook</a>
                        </li>
                        <li>
                            <a href="#!">YouTube</a>
                        </li>
                        <li>
                            <a href="#!">TikTok</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase ">Contacto</h5>
                    <ul class="list-unstyled ">
                        <li>
                            <a href="#!">correo@musical.cl</a>
                        </li>
                        <li>
                            <a href="#!">+56 9 7997 8763</a>
                        </li>
                        <li>
                            <a href="#!"></a>
                        </li>
                        <li>
                            <a href="#!"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase ">Atencion al Cliente</h5>
                    <ul class="list-unstyled ">
                        <li>
                            <a href="#!">Asistencia de Compra</a>
                        </li>
                        <li>
                            <a href="#!">Devoluciones</a>
                        </li>
                        <li>
                            <a href="#!">Garantias</a>
                        </li>
                        <li>
                            <a href="#!">Servicio Tecnico</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p>© 2020 Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
</body>

</html>
@endsection

