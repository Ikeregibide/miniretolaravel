<!DOCTYPE html>
<html>
<head>
    <title>RevistApp</title>
</head>
<body>
    <h1>Revistapp</h1>
    <h2>Listado artículos:</h2>
    <a href="<?php echo e(route('articulos.create')); ?>">Crear nuevo</a>
    <table>
        <tr><th>Enlace</th><th>Título</th></tr>
        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><a href="<?php echo e(route('articulos.show', $articulo->id)); ?>">Ver</a></td>
            <td><?php echo e(($articulo->titulo)); ?></td><br>
            <td><a href="<?php echo e(route('articulos.destroy', $articulo->id)); ?>">Borrar</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<a href="<?php echo e(route('articulos.create')); ?>">Crear</a><br>

</body>
</html><?php /**PATH /var/www/html/resources/views/articulos/index.blade.php ENDPATH**/ ?>