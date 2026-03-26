<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colecciones</title>

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




        .card-grande {
            background-color: #8B5E3C;
            color: white;
            border-radius: 20px;
            /* 👈 redondeado */
            overflow: hidden;
            /* 👈 importante para la imagen */
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



        .card {
            background-color: #26364d;
            /* marrón */
            color: white;
        }
    </style>

</head>

<body>

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
                        <a class="nav-link px-3" href="pedidos">Pedidos</a>
                    </li>
                </ul>

                <!-- Espacio a la derecha para equilibrar el logo (opcional) -->
                <div class="d-none d-lg-block" style="width: 50px;"></div>
            </div>




        </div>
    </nav>


    <main class="container-fluid my-5 px-4">

        @foreach ($productos->reverse()->take(2) as $producto)

        <div class="card card-grande mb-5 shadow-lg">
            <div class="row align-items-center">

                <!-- TEXTO (izquierda) -->
                <div class="col-md-6 d-flex align-items-center">
                    <div class="p-5">

                        <h2 class="fw-bold">{{ $producto->nombre }}</h2>

                        <p>{{ $producto->descripcion }}</p>


                        <a href="#" class="btn btn-info text-white fw-bold mt-2">
                            Comprar
                        </a>

                    </div>
                </div>

                <!-- IMAGEN (derecha) -->
                <div class="col-md-6">
                    <img src="{{ asset($producto->imagen) }}"
                        class="w-100"
                        style="height: 350px; object-fit: cover;">
                </div>

            </div>
        </div>

        @endforeach

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