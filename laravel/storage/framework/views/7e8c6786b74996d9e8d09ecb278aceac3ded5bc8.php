

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Редактировать товар</h1>

        <form method="post" action="<?php echo e(route('admin.updateProduct', $product->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="name">Название товара</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($product->name); ?>">
            </div>

            <div class="form-group">
                <label for="description">Описание товара</label>
                <textarea class="form-control" id="description" name="description" rows="5"><?php echo e($product->description); ?></textarea>
            </div>

            <div class="form-group">
                <label for="price">Цена товара</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($product->price); ?>">
            </div>

            <div class="form-group">
                <label for="category">Категория товара</label>
                <select class="form-control" id="category" name="category">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id == $product->category ? 'selected' : ''); ?>>
                            <?php echo e($cat->name_category); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Колличество товара на складе</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo e($product->quantity); ?>">
            </div>

            <div class="form-group">
                <label for="size">Размер</label>
                <input type="text" class="form-control" id="size" name="size" value="<?php echo e($product->size); ?>">
            </div>

            <div class="form-group mt-3">
                <label for="image">Изображение товара</label>
                <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/admin/editProduct.blade.php ENDPATH**/ ?>