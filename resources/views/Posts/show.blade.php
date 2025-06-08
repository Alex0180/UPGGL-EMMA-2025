<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenidos</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen">
    <div class="text-center bg-white p-10 rounded-2xl shadow-lg">
        <h1 class="text-4xl font-bold mb-4 text-blue-600">Informacion del Post</h1>


<h2 class="text-primary">  {{$post}} </h2>

<h3 class= "text-primary"> {{$categoria}}</h3>

@if ($categoria == "comida")
<span class="badge bg-secundary"> Delicioso </span>
@else
<span class="badge bg-secundary"> No es comida </span>
@endif


<h2>Lista de Ítems</h2>

@for ($i = 0; $i < 5; $i++)
    <p>Este es el ítem {{ $i }}</p>
@endfor

    </div>
</body>
</html>