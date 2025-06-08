<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo Repetido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fffdf0;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card shadow-lg border-danger">
        <div class="card-header bg-danger text-white">
            <h3 class="mb-0 fw-bold">🔁 Saludos Repetidos</h3>
        </div>
        <div class="card-body bg-white">
            <ul class="list-group">
                @for ($i = 0; $i < $veces; $i++)
                    <li class="list-group-item list-group-item-info">
                        💬 ¡Hola número {{ $i + 1 }}!
                    </li>
                @endfor
            </ul>
        </div>
    </div>
</div>

</body>
</html>
