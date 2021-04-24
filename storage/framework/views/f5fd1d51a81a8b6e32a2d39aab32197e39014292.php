

<?php $__env->startSection('content'); ?>
<div class="container">


<?php if(Session::has('mensaje')): ?>
<div class="alert alert-success  alert-dismissible" role="alert">
<?php echo e(Session::get('mensaje')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
<?php endif; ?>











<br>
<br>
<table class="table table-light">
<thead class="thead-light">
<tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Contenido</th>
    <th>Acciones</th>
    
</tr>
</thead>

<tbody>
<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($producto->id); ?></td>
    <td><?php echo e($producto->Nombre); ?></td>
    <td><?php echo e($producto->Descripcion); ?></td>
    <td><?php echo e($producto->Precio); ?></td>
    <td><?php echo e($producto->Contenido); ?></td>
    <td>
    

    <a href="<?php echo e(url('/productos/'.$producto->id.'/edit')); ?>" class="btn btn-warning">
    Editar
    </a>

    <form action="<?php echo e(url('/productos/'.$producto->id)); ?>" class="d-inline" method="post">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('DELETE')); ?>

    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres elimar este dato')"
    value="Borar">
    <a href="<?php echo e(url('productos/create')); ?>" class="btn btn-success">Agregar Productos</a>
    </form>
    </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo $productos->links(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/productos/index.blade.php ENDPATH**/ ?>