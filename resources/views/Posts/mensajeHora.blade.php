<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje por Hora</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Fonts: Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e6f2ff;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card border-primary shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0 fw-bold">🕒 Mensaje Según la Hora</h3>
        </div>
        <div class="card-body bg-white text-center">
            <h1 class="display-4">{{ $mensaje }}</h1>
            <p class="text-muted">Este mensaje cambia dependiendo de la hora del día.</p>
        </div>
    </div>
</div>

</body>
</html>
