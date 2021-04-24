

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
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Acciones</th>
    
</tr>
</thead>

<tbody>
<?php $__currentLoopData = $vendedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($vendedores->id); ?></td>
    <td><?php echo e($vendedores->Nombre); ?></td>
    <td><?php echo e($vendedores->primer_apellido); ?></td>
    <td><?php echo e($vendedores->segundo_apellido); ?></td>
    <td>

    <a href="<?php echo e(url('/vendedor/'.$vendedores->id.'/edit')); ?>" class="btn btn-warning">
    Editar
    </a>

    <form action="<?php echo e(url('/vendedor/'.$vendedores->id)); ?>" class="d-inline" method="post">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('DELETE')); ?>

    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres elimar este dato')"
    value="Borar">
    <a href="<?php echo e(url('vendedor/create')); ?>" class="btn btn-success">Crear Usuario</a>
    
    </td>
    </form>
    </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo $vendedor->links(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/vendedor/index.blade.php ENDPATH**/ ?>