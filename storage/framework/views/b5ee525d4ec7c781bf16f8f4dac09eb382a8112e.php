<form action="<?php echo e(url('/productos/'.$productos->id)); ?>" method='post' enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo e(method_field('PATCH')); ?>

<?php echo $__env->make('productos.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php /**PATH C:\xampp\htdocs\Proyecto Final\Productos\resources\views/productos/edit.blade.php ENDPATH**/ ?>