

<?php $__env->startSection('content'); ?>
<div class="container">


<h1>Agregar Productos</h1>
<form action="<?php echo e(url('/productos')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>


<?php if(count($errors)>0): ?>

   <div class="alert  alert-danger" role="alert">
   <ul>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li> <?php echo e($error); ?> </li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>
   </div>

<?php endif; ?>

<div class="form-group">
<label for="Nombre"> Nombre: </label>
<input type="text" class="form-control" name="Nombre">
</div>

<div class="form-group">
<label for="Descripcion"> Descripcion: </label>
<input type="text" class="form-control" name="Descripcion">
</div>

<div class="form-group">
<label for="Precio"> Precio: </label>
<input type="text" class="form-control" name="Precio">
</div>

<div class="form-group">
<label for="Contenido"> Contenido: </label>
<input type="text" class="form-control" name="Contenido">
</div>

<div class="form-group">
<label for="foto"> Coloca tu fotografia: </label>
<input type="file" class="form-control" name="foto">
</div>

<input class="btn btn-success" type="submit" value="Agregar Producto">
<a class="btn btn-primary" href="<?php echo e(url('/productos')); ?>">Regresar</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/productos/create.blade.php ENDPATH**/ ?>