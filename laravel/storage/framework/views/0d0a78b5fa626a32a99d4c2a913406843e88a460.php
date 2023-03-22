

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Товары</h1>

        <div class="row mb-4">
            <div class="col-md-4">
                <form action="<?php echo e(route('admin.addProduct')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="name">Наименование товара</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="description">Описание товара</label>
                        <textarea name="description" id="description" class="form-control" required><?php echo e(old('description')); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Цена товара</label>
                        <input type="number" name="price" id="price" class="form-control" value="<?php echo e(old('price')); ?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="category">Категория</label>
                        <select class="form-control" id="category" name="category">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name_category); ?></option>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name_category); ?></option>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name_category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="quantity">Колличество товара на складе</label>
                        <input type="quantity" name="quantity" id="quantity" class="form-control"
                            value="<?php echo e(old('quantity')); ?>" required>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="model">Год модели</label>
                        <input type="number" name="model" id="model" class="form-control"
                            value="<?php echo e(old('model')); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="year">Год производства</label>
                        <input type="number" name="year" id="year" class="form-control"
                            value="<?php echo e(old('year')); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Изображение товара</label>
                        <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-success mt-4">Добавить товар</button>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Изображение товара</th>
                    <th>Наименование товара</th>
                    <th>Описание товара</th>
                    <th>Цена товара</th>
                    <th>Категория</th>
                    <th>Колличество товара на складе</th>
                    <th>Год модели</th>
                    <th>Год производства</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><img src="/public/img/<?php echo e($product->image); ?>" alt="" class="w-100"></td>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td><?php echo e($product->price); ?> руб.</td>
                        <td>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($product->category === $cat->name_category); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td><?php echo e($product->model); ?></td>
                        <td><?php echo e($product->year); ?></td>
                        <td>
                            <div class="btn-group">
                                <form action="<?php echo e(route('admin.deleteProduct', $product->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                                <a href="<?php echo e(route('admin.editProduct', $product->id)); ?>"
                                    class="btn btn-primary ms-2">Редактировать</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/admin/products.blade.php ENDPATH**/ ?>