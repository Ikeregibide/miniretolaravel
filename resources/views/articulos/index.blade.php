<!DOCTYPE html>
<html>
<head>
    <title>RevistApp</title>
</head>
<body>
    <h1>adfga</h1>
    <h2>Listado artículos:</h2>
    <a href="{{ route('articulos.create') }}">Crear nuevo</a>
    <table>
        <tr><th>Enlace</th><th>Título</th></tr>
        @foreach ($articulos as $articulo)
        <tr>
            <td><a href="{{ route('articulos.show', $articulo->id) }}">Ver</a></td>
            <td>{{ ($articulo->titulo) }}</td><br>
            <td><a href="{{ route('articulos.destroy', $articulo->id) }}">Borrar</a></td>
        </tr>
        @endforeach
    </ul>
</body>
</html>
<a href="{{ route('articulos.create') }}">Crear</a><br>

</body>
</html>
