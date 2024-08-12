@extends('layouts.app')
@section('contenido')

    <style>
        .center-text {
            text-align: center;
            font-size: 2em; /* Ajusta este valor para cambiar el tamaño del texto */
        }
    </style>
    <!-- Carousel wrapper -->
    <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel"
        data-mdb-carousel-init>
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="1" aria-label="Slide 1"></button>
            <button data-mdb-target="#carouselDarkVariant" data-mdb-slide-to="2" aria-label="Slide 1"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="https://tiendasel.vteximg.com.br/arquivos/ids/703700/banner-calzado.png?v=636765157228900000" class="d-block w-100"
                    alt="Motorbike Smoke" />
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://glentshoes.com/media/wysiwyg/home-slider/2020/es/slide-15.jpg" class="d-block w-100"
                    alt="Mountaintop" />
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/a0/d7/6e/a0d76e101137dbee7fc66994fc58c0b5.jpg" class="d-block w-100"
                    alt="Woman Reading a Book" />
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

    <p class="center-text">
        Bienvenidos! Ahora pueden ver los productos
    </p>

    <div class="container mt-5">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/18/29/6d/18296d7a0cabcf2071bd4caa5f70284c.jpg" class="card-img-top" alt="Zapato 1">
                    <div class="card-body">
                        <h5 class="card-title">NIKE HOMBRE</h5>
                        <p class="card-text">$2500</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://www.innvictus.com/medias/tenis-air-jordan-1-low-light-smoke-grey-in-553558
            -030-4.png?context=bWFzdGVyfGltYWdlc3wyNDQ1ODF8aW1hZ2UvcG5nfGltYWdlcy9oM2UvaGMwLzk3NjE2NjQ1OT
            gwNDYucG5nfDljMzdjNzI1ZGE5MDA0MDNmYzhmZTU2MzMzN2IyNjkyMzQwZjQ3YTlmNzAwMmNhMjA4YmM2OTY2N2E4ZDA2NTI" class="card-img-top" alt="Zapato 2">
                    <div class="card-body">
                        <h5 class="card-title">NIKE HOMBRE</h5>
                        <p class="card-text">$2500</p>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://www.innvictus.com/medias/tenis-nike-air-jordan-1-
            mid-in-554724-066-7.png?context=bWFzdGVyfGltYWdlc3wzMDI0Mjh8aW1hZ2UvcG5nfGl
            tYWdlcy9oZWMvaGQ4Lzk4NDk3NjQyNDk2MzAucG5nfGQ1ZWRjM2M4NDRhZmI4NTRjNmQyYjJkNjU0YT
            BmNTlkOTEyNDJmYzIzMTMyZmE0ZWViMzQwMjkxNWU1YTJjZTE" class="card-img-top" alt="Zapato 3">
                    <div class="card-body">
                        <h5 class="card-title">NIKE HOMBRE</h5>
                        <p class="card-text">$2500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e0586dee-6852-4f67-b835-b3a4bfaf4567/sb-blzr-court-skate-shoes-R6bVLk.png" class="card-img-top" alt="Zapato 1">
                    <div class="card-body">
                        <h5 class="card-title">NIKE HOMBRE</h5>
                        <p class="card-text">$2500</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/fcb6ac30-274d-483b-8704-3c08b384b6d2/blazer-low-leather-shoe-XCpxMD.png" class="card-img-top" alt="Zapato 2">
                    <div class="card-body">
                        <h5 class="card-title">NIKE HOMBRE</h5>
                        <p class="card-text">$2500</p>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ac9b7cbc-a300-4721-91b2-2004a7308ae1/blazer-mid-vintage-77-shoe-rRfrTQ.png" class="card-img-top" alt="Zapato 3">
                    <div class="card-body">
                        <h5 class="card-title">NIKE MUJER</h5>
                        <p class="card-text">$2500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
