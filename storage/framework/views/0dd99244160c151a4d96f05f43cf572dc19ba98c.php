<html>
<head>
    <title>RevistApp</title>
</head>
<body>
    <h1>Revistapp</h1>
    <h2>Crear un artículo:</h2>

    <form method="POST" action="<?php echo e(route('articulos.store')); ?>">
        <?php echo csrf_field(); ?>
        <p><label>Titulo: </label><input type="text" name="titulo"></p>
        <p><label>Contenido: </label><input type="text" name="contenido"></p>
        <button type="submit">Crear</button>
    </form>
    <a href="<?php echo e(route('articulos.index')); ?>">Volver</a>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/articulos/create.blade.php ENDPATH**/ ?>