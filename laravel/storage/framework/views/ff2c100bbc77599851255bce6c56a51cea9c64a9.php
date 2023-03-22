

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Список категорий</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($category->id); ?></td>
                        <td><?php echo e($category->name_category); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.editCategories', ['id' => $category->id])); ?>"
                                class="btn btn-primary">Изменить</a>
                            <form action="<?php echo e(route('admin.deleteCategories', ['id' => $category->id])); ?>" method="POST"
                                style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Вы уверены?')">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <h2>Добавить Категорию</h2>
        <form action="<?php echo e(route('admin.addCategory')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Название категории:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\laravel\resources\views/admin/categories.blade.php ENDPATH**/ ?>