<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje Personalizado</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Fonts: Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f2fef5;
        }
        .bg-verde-suave {
            background-color: #A9DFBF;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card text-dark bg-verde-suave shadow-lg">
        <div class="card-header border-0 bg-transparent">
            <h3 class="mb-0 fw-bold">🌿 Mensaje Personalizado</h3>
        </div>
        <div class="card-body">
            {{-- Aquí mostramos el nombre recibido desde el controlador --}}
            <h1 class="display-5">¡Hola, {{ $nombre }}! 👋</h1>
            <p class="lead">Nos alegra verte por aquí. Esperamos que disfrutes tu visita.</p>
        </div>
    </div>
</div>

</body>
</html>

