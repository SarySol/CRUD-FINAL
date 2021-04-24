

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
    <th>Fecha Pedido</th>
    <th>Estado Pedido</th>
    <th>fecha envio</th>
    <th>Cliente ID</th>
    <th>Vendedor ID</th>
    <th>Acciones</th>
    
</tr>
</thead>

<tbody>
<?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($pedido->id); ?></td>
    <td><?php echo e($pedido->fecha_pedido); ?></td>
    <td><?php echo e($pedido->estado_pedido); ?></td>
    <td><?php echo e($pedido->fecha_envio); ?></td>
    <td><?php echo e($pedido->cliente_id); ?></td>
    <td><?php echo e($pedido->vendedor_id); ?></td>
    <td>
    

    <a href="<?php echo e(url('/pedidos/'.$pedido->id.'/edit')); ?>" class="btn btn-warning">
    Editar
    </a>

    <form action="<?php echo e(url('/pedidos/'.$pedido->id)); ?>" class="d-inline" method="post">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('DELETE')); ?>

    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres elimar este dato')"
    value="Borar">
    <a href="<?php echo e(url('pedidos/create')); ?>" class="btn btn-success">Agregar Pedidos</a>
    </form>
    </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo $pedidos->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/pedidos/index.blade.php ENDPATH**/ ?>