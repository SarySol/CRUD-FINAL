<form action="<?php echo e(url('/pedidos/'.$pedidos->id)); ?>" method='post' enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo e(method_field('PATCH')); ?>

<?php echo $__env->make('pedidos.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/pedidos/edit.blade.php ENDPATH**/ ?>