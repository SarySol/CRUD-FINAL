

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
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($cliente->id); ?></td>
    <td><?php echo e($cliente->Nombre); ?></td>
    <td><?php echo e($cliente->primer_apellido); ?></td>
    <td><?php echo e($cliente->segundo_apellido); ?></td>
    <td>

    <a href="<?php echo e(url('/clientes/'.$cliente->id.'/edit')); ?>" class="btn btn-warning">
    Editar
    </a>

    <form action="<?php echo e(url('/clientes/'.$cliente->id)); ?>" class="d-inline" method="post">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('DELETE')); ?>

    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres elimar este dato')"
    value="Borar">
    <a href="<?php echo e(url('clientes/create')); ?>" class="btn btn-success">Crear Cliente</a>
    </form>
    </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo $clientes->links(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/clientes/index.blade.php ENDPATH**/ ?>