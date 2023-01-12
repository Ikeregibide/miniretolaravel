<!DOCTYPE html>
<html>
<head>
    <title>RevistApp</title>
</head>
<body>
    <h1>Revistapp</h1>
    <h2>Detalle del artículo:</h2>
    <p>Titulo: {{ $articulo->titulo }}</p>
    <p>Contenido: {{ $articulo->contenido }}</p>
    <a href="{{ route('articulos.index') }}">Volver</a>
</body>
</html>