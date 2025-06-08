<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del Estudiante</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f8e9; /* Verde claro sutil */
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            color: #0d47a1; /* Azul oscuro */
        }
        .card {
            background-color: #e8f5e9; /* Verde claro */
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #c8e6c9; /* Verde aún más claro */
            border-bottom: none;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            text-align: center;
        }
        .card-body {
            text-align: center;
        }
        .card-body p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card w-100" style="max-width: 500px;">
            <div class="card-header">
                <h3>Información del Estudiante</h3>
            </div>
            <div class="card-body">
                <p>Nombre: <strong>{{ $name }}</strong></p>
                <p>Edad: <strong>{{ $age }}</strong> años</p>
            </div>
        </div>
    </div>
</body>
</html>
