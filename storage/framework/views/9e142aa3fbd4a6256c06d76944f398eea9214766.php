

<?php $__env->startSection('content'); ?>
<div class="container">

<h1>Editar Cliente</h1>

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
<input type="text" class="form-control" name="Nombre" value="<?php echo e($clientes->Nombre); ?>">
</div>

<div class="form-group">
<label for="primer_apellido"> Primer Apellido: </label>
<input type="text" class="form-control" name="primer_apellido" value="<?php echo e($clientes->primer_apellido); ?>">
</div>

<div class="form-group">
<label for="segundo_apellido">Segundo Apellido: </label>
<input type="text" class="form-control" name="segundo_apellido" value="<?php echo e($clientes->segundo_apellido); ?>">
</div>

<div class="form-group">
<img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$clientes->foto); ?>" width="100" alt="">
<input type="file" class="form-control" name="foto" value="">
</div>


<input class="btn btn-success" type="submit" value="Editar Datos">

<a class="btn btn-primary" href="<?php echo e(url('/clientes')); ?>">Regresar</a>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/clientes/form.blade.php ENDPATH**/ ?>