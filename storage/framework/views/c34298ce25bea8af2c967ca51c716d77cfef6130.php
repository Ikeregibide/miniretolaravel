<!DOCTYPE html>
<html>
<head>
    <title>RevistApp</title>
</head>
<body>
    <h1>Revistapp</h1>
    <h2>Detalle del artículo:</h2>
    <p>Titulo: <?php echo e($articulo->titulo); ?></p>
    <p>Contenido: <?php echo e($articulo->contenido); ?></p>
    <a href="<?php echo e(route('articulos.index')); ?>">Volver</a>
</body>
</html><?php /**PATH /var/www/html/resources/views/articulos/show.blade.php ENDPATH**/ ?>