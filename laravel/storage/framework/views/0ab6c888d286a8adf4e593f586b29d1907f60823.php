

<?php $__env->startSection('content'); ?>
    <div class="container admin_products pt-5 z-index-1">
        <div class="row cart__items">
            <div class="col-md-3 left">
                <h1>Товары</h1>
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
                            <option value="">Выберите категорию</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>" <?php echo e(($cat->id == request()->query('category')) ? 'selected' : ''); ?>><?php echo e($cat->name_category); ?></option>
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
                        <label for="size">Размер</label>
                        <input type="number" name="size" id="size" class="form-control"
                            value="<?php echo e(old('size')); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Изображение товара</label>
                        <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-success mt-4">Добавить товар</button>
                </form>
            </div>
            <div class="col-md-9 right">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="busket-card row white-bg br-15px mb-4 me-4 w-100">
                        <div class="col-md-6 p-3 cart__left">
                            <img src="/img/<?php echo e($product->image); ?>" alt="black-blue" class="w-100 cart__photo">
                        </div>
                        <div class="col-md-6 p-3 text-black cart__right">
                            <div class="d-flex">
                                <p class="text-30px mt-3 me-auto"><strong>№<?php echo e($product->id); ?> <?php echo e($product->name); ?></strong></p>
                            </div>
                            <div class="d-flex">
                                <p><?php echo e($product->description); ?></p>
                            </div>
                            <div class="d-flex">
                                <p class="cart__price mt-1 mt-2"><?php echo e(intval($product->price)); ?> руб.
                                </p>
                            </div>
                            <div class="quantity">
                                <div class="d-flex quantity_buttons text24px weight700">
                                    Количество : <p class="m-0 ms-3"><?php echo e($product->quantity); ?> шт.</p>
                                </div>
                            </div>
                            <div class="d-flex mt-4 mb-3">
                                <p class="cart__product__size  mt-2 text24px400">Размер:
                                    <strong class="text-black ms-3"><?php echo e($product->size); ?></strong>
                                </p>
                            </div>
                            <div class="btn-group d-flex">
                                <form action="<?php echo e(route('admin.deleteProduct', $product->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="z-index-1 btn btn-danger">Удалить</button>
                                </form>
                                <a href="<?php echo e(route('admin.editProduct', $product->id)); ?>"
                                    class="z-index-1 btn btn-primary ms-2">Редактировать</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/admin/products.blade.php ENDPATH**/ ?>