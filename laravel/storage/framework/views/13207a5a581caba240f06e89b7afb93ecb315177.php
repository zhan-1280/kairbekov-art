

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Редактировать Категорию</h1>

        <form method="post" action="<?php echo e(route('admin.updateCategories', $category->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="name" class="text-25px">Название категории</label>
                <input type="text" class="form-control mb-2 text-30px" id="name" name="name" value="<?php echo e($category->name_category); ?>">
            </div>

            <button type="submit" class="btn btn-primary text-25px">Сохранить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/admin/edit-category.blade.php ENDPATH**/ ?>