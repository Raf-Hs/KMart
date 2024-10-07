<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMart - Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Aquí puedes agregar tu CSS adicional -->
    <style>
        .navbar {
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .navbar.scrolled {
            background-color: #007bff; /* Azul */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra */
        }
        .nav-link {
            color: #007bff; /* Azul para los enlaces */
            transition: color 0.3s; /* Transición de color */
        }
        .nav-link:hover {
            color: #0056b3; /* Azul oscuro al pasar el mouse */
            text-decoration: underline; /* Subrayar al pasar el mouse */
        }
        footer {
            background-color: #f8f9fa; /* Color de fondo claro para el pie de página */
            padding: 10px 0; /* Espaciado en el pie de página */
            margin-top: 20px; /* Margen superior para separar del contenido */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand font-weight-bold" href="#">KMart</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto"> <!-- Alinear los elementos a la derecha -->
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content') <!-- Este es el lugar donde se incluirá el contenido de las vistas que extiendan esta plantilla -->
    </main>

    <footer class="text-center mt-4">
        <p>© 2024 KMart. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Efecto de cambio de color al desplazarse
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
