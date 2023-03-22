

<?php $__env->startSection('content'); ?>
    <div class="container admin__category z-index-1">
        <h1 class="mb-3 text-30px">Список категорий</h1>
        <div class="row cart__items">
            <div class="col-md-3 left">
                <h2 class="text-25px">Добавить Категорию</h2>
                <form action="<?php echo e(route('admin.addCategory')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label class="text-25px" for="name">Название категории:</label>
                        <input type="text" name="name" id="name" class="form-control mb-2 text-25px">
                    </div>
                    <button type="submit" class="btn btn-primary text-25px">Добавить</button>
                </form>
            </div>
            <div class="col-md-8 right">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="busket-card row white-bg br-15px mb-4 me-4 w-100">
                        <div class="d-flex justify-content-around">
                            <p class="text-25px me-3 mt-3"><strong>№<?php echo e($category->id); ?></strong></p>
                            <p class="text-25px text24px400 mt-3 name__category">Название категории:
                                <strong class="text-black ms-2"><?php echo e($category->name_category); ?></strong>
                            </p>
                            <div class="d-flex align-center flex_mobile">
                                <a href="<?php echo e(route('admin.editCategories', ['id' => $category->id])); ?>"
                                    class="btn btn-primary me-4 text-25px">Изменить</a>
                                <form action="<?php echo e(route('admin.deleteCategories', ['id' => $category->id])); ?>" method="POST"
                                    style="display: inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger text-25px"
                                        onclick="return confirm('Вы уверены?')">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/admin/categories.blade.php ENDPATH**/ ?>