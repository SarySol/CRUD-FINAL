

<?php $__env->startSection('content'); ?>
<div class="container">

<h1>Editar Pedidos</h1>

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
<label for="fecha_pedido"> Fecha Pedido: </label>
<input type="date" class="form-control" name="fecha_pedido" value="<?php echo e($pedidos->fecha_pedido); ?>">
</div>

<div class="form-group">
<label for="estado_pedido"> Estado Pedido: </label>
<input type="text" class="form-control" name="estado_pedido" value="<?php echo e($pedidos->estado_pedido); ?>">
</div>

<div class="form-group">
<label for="fecha_envio">Fecha envio: </label>
<input type="date" class="form-control" name="fecha_envio" value="<?php echo e($pedidos->fecha_envio); ?>">
</div>

<div class="form-group">
<label for="cliente_id">Cliente ID: </label>
<input type="text" class="form-control" name="cliente_id" value="<?php echo e($pedidos->cliente_id); ?>">
</div>

<div class="form-group">
<label for="vendedor_id">Vendedor ID: </label>
<input type="text" class="form-control" name="vendedor_id" value="<?php echo e($pedidos->vendedor_id); ?>">
</div>


<input class="btn btn-success" type="submit" value="Editar Pedido">

<a class="btn btn-primary" href="<?php echo e(url('/pedidos')); ?>">Regresar</a>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/pedidos/form.blade.php ENDPATH**/ ?>