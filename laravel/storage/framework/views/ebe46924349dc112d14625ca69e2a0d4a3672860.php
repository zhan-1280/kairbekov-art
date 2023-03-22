<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="<?php echo e(route('admin.orders')); ?>" class="btn btn-success m-auto">Просмотр и редактирование заказов</a>
            <a href="<?php echo e(route('admin.products')); ?>" class="btn btn-primary m-auto">Добавление и редактирование товаров в каталоге</a>
            <a href="<?php echo e(route('admin.category')); ?>" class="btn btn-danger m-auto">Добавление и удаление категорий</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/admin/admin.blade.php ENDPATH**/ ?>