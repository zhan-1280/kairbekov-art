<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="title">Управление товарами</h1>
        <table class="cat-table">
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="tr-bottom">
                    <td><p class="m-0"><?php echo e($loop->iteration); ?>.</p></td>
                    <td><p class="m-0"><?php echo e($p->name); ?></p></td>
                    <td><p class="m-0"><?php echo e($p->price); ?></p></td>
                    <td><p class="m-0"><?php echo e($p->country); ?></p></td>
                    <td><p class="m-0"><?php echo e($p->model); ?></p></td>
                    <td><p class="m-0"><?php echo e($p->Category->name); ?></p></td>
                    <td><p class="m-0"><?php echo e($p->year); ?></p></td>
                    <td><p class="m-0"><?php echo e($p->count); ?></p></td>
                    <td class="img-td"><img src="/public/img/<?php echo e($p->photo); ?>" alt="<?php echo e($p->photo); ?>"></td>
                    <td><a href="/public/admin/product/edit/<?php echo e($p->id); ?>" class="btn btn-primary">Изменить</a></td>
                    <td><a href="/public/admin/product/delete/<?php echo e($p->id); ?>" class="btn btn-danger">Удалить</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <form action="/public/admin/product/add" class="product-add">
            <p class="inp-desc">Название</p><input type="text" name="name"><br>
            <p class="inp-desc">Цена</p><input type="number" name="price"><br>
            <p class="inp-desc">Страна</p><input type="text" name="country"><br>
            <p class="inp-desc">Модель</p><input type="text" name="model"><br>
            <p class="inp-desc">Год</p><input type="number" name="year"><br>
            <p class="inp-desc">Кол-во</p><input type="number" name="count"><br>
            
            <p class="inp-desc">Категория</p>
            <select name="category" id="category">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <p class="inp-desc">Фото</p><input type="file" name="photo"><br>
            <button class="btn btn-success" type="submit">Добавить </button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/product-admin.blade.php ENDPATH**/ ?>