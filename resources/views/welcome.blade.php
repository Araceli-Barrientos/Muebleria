<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebleria</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Color marrón claro personalizado */
        .bg-marron-claro {
            background-color: #f8ead8 !important;
            /* Tono "Tan" o canela claro */
        }

        /* Estilo para la imagen circular */
        .navbar-brand img {
            width: 50px;
            height: 50px;
            object-fit: cover;

        }

        /* Estilos para los links de navegación */
        .nav-link {
            color: #4a3728 !important;
            /* Marrón oscuro para el texto */
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffffff !important;
        }

        /* Ajuste para centrar los elementos en pantallas grandes */
        @media (min-width: 992px) {
            .navbar-collapse {
                display: flex !important;
                justify-content: space-between;
            }

            .navbar-nav-center {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }
        }



        .hero {
            position: relative;
            height: 100vh;
            background: url('https://via.placeholder.com/1600x900') no-repeat center center/cover;
            color: white;
        }

        .hero-text {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: black;
            /* 👈 acá */
        }

        .hero-btn {
            position: absolute;
            bottom: 20px;
            /* 👈 abajo */
            right: 20px;
            /* 👈 derecha */
        }


        body {
            background-color: #26364d;
            /* azul */
        }

        .card {
            background-color: #8B5E3C;
            /* marrón */
            color: white;
            border: none;
        }

        .card .btn {
            background-color: #41ceee;
            /* celeste */
            border: none;
        }

        .container {
            background-color: transparent !important;
        }

        .footer-logo {
            width: 110px;
            height: 110px;
            object-fit: cover;
            margin-top: 10px;
            /* 👈 lo baja */
        }

        footer p {
            margin: 0;
        }

        footer h6 {
            margin-bottom: 3px;
            font-size: 13px;
        }

        footer .row {
            margin-bottom: 5px;
        }

        footer {
            font-size: 13px;
        }

        footer .col-md-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* centra verticalmente */
        }

        footer h5 {
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body class=" body">

    <nav class="navbar navbar-expand-lg bg-marron-claro shadow-sm">
        <div class="container">
            <!-- Lado Izquierdo: Imagen Redonda -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/logo_inicial.png') }}" alt="Logo Mueblería" class="rounded-circle">
            </a>
            <!-- Botón para móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de Navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Links Centrados -->
                <ul class="navbar-nav navbar-nav-center">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="welcome">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="colecciones">Colecciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="pedido">Pedidos</a>
                    </li>
                </ul>

                <!-- Espacio a la derecha para equilibrar el logo (opcional) -->
                <div class="d-none d-lg-block" style="width: 50px;"></div>
            </div>




        </div>
    </nav>


    <section class="hero position-relative">

        <!-- Imagen -->
        <img src="{{ asset('img/hero.png') }}" class="w-100 vh-100 object-fit-cover" alt="hero">

        <!-- Texto -->
        <div class="hero-text position-absolute top-0 start-50 translate-middle-x text-center mt-4 text-dark">
            <p class="fs-3">
                Jorge Rodriguez Muebles <br>
                Transforma tu casa en un lugar único
            </p>
        </div>

        <!-- Botón abajo derecha -->
        <div class="position-absolute bottom-0 end-0 m-4">
            <a href="/colecciones" class="btn btn-info text-white fw-bold">
                Ver colección
            </a>
        </div>

    </section>


    <main class="container my-5">
        <div class="row">

            @foreach ($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">

                    <!-- Imagen -->
                    <img src="{{ asset($producto->imagen) }}" class="card-img-top"
                        style="height: 250px; object-fit: cover;">

                    <!-- Contenido -->
                    <div class="card-body d-flex flex-column">
                        <h5>{{ $producto->nombre }}</h5>

                        <p>{{ $producto->descripcion }}</p>

                        <p class="fw-bold">$ {{ $producto->precio }}</p>

                        <a href="#" class="btn btn-info text-white mt-auto">
                            Comprar
                        </a>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </main>


    <footer class="bg-marron-claro mt-5">

        <div class="container py-2">

            <div class="text-center mb-2">
                <h5 class="fw-bold">Contacta con nosotros</h5>
            </div>

            <div class="row align-items-center text-center">

                <!-- Logo -->
                <div class="col-md-3 text-center text-md-start">
                    <img src="{{ asset('img/logo_inicial.png') }}" class="rounded-circle footer-logo" alt="Logo">
                </div>

                <!-- Bloques al lado del logo -->
                <div class="col-md-9">

                    <div class="row text-center">

                        <!-- Oficina -->

                        <div class="col-md-4">
                            <div class="footer-icon">🏢</div>
                            <div class="footer-title fw-bold">Nuestra oficina</div>
                            <div class="footer-text">Garupá, Altos González</div>
                        </div>


                        <!-- Contacto -->
                        <div class="col-md-4">
                            <div class="fs-6">📞</div>
                            <h6 class="fw-bold">Datos de contacto</h6>
                            <p>3765-238877 // 3764-992871</p>
                        </div>

                        <!-- Email -->
                        <div class="col-md-4">
                            <div class="fs-6">✉️</div>
                            <h6 class="fw-bold">E-mail</h6>
                            <p>JorgeFerreyra12@gmail.com</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>


    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>