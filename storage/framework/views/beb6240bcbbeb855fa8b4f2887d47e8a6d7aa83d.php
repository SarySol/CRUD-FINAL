

<?php $__env->startSection('content'); ?>
<div class="container">


<h1>Crear Vendedor</h1>
<form action="<?php echo e(url('/vendedor')); ?>" method="post" enctype="multipart/form-data">
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
<label for="primer_apellido"> Primer Apellido: </label>
<input type="text" class="form-control" name="primer_apellido">
</div>

<div class="form-group">
<label for="segundo_apellido">Segundo Apellido: </label>
<input type="text" class="form-control" name="segundo_apellido">
</div>

<div class="form-group">
<label for="foto"> Coloca tu fotografia: </label>
<input type="file" class="form-control" name="foto">
</div>

<input class="btn btn-success" type="submit" value="Guardar Datos">
<a class="btn btn-primary" href="<?php echo e(url('/vendedor')); ?>">Regresar</a>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/vendedor/create.blade.php ENDPATH**/ ?>