<?php $__env->startSection('content'); ?>
    <div class="container catalog">
        <h1>Каталог товаров</h1>

        <div class="filters">
            <form action="<?php echo e(route('catalog')); ?>" method="GET">
                <div class="form-group">
                    <label for="category">Категория:</label>
                    <select name="category" class="form-control w-25" id="category">
                        <option value="">Все категории</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e(($category->id == request()->query('category')) ? 'selected' : ''); ?>><?php echo e($category->name_category); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group d-flex">
                    <label>Сортировка:</label>
                    <div class="ms-2 form-check">
                        <input class="form-check-input" type="radio" name="sort_by" id="sort_by_name" value="name" <?php echo e((request()->query('sort_by') == 'name') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="sort_by_name">
                            По имени
                        </label>
                    </div>
                    <div class="ms-2 form-check">
                        <input class="form-check-input" type="radio" name="sort_by" id="sort_by_price" value="price" <?php echo e((request()->query('sort_by') == 'price') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="sort_by_price">
                            По цене
                        </label>
                    </div>
                    <div class="ms-2 form-check">
                        <input class="form-check-input" type="radio" name="sort_by" id="sort_by_year" value="year" <?php echo e((request()->query('sort_by') == 'year') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="sort_by_year">
                            По году производства
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Применить</button>
            </form>

        </div>

        <div class="products">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product">
                    <a href="<?php echo e(route('product', $product->id)); ?>" class="text-black none-underline product_link">
                        <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                        <h3><?php echo e($product->name); ?></h3>
                        <p class="price"><?php echo e($product->price); ?> руб.</p>
                        <form action="<?php echo e(route('cart.add', ['productId' => $product->id])); ?>" method="POST" class="w-100">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-primary w-100">Добавить в корзину</button>
                        </form>
                    </a>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\laravel\resources\views/catalog.blade.php ENDPATH**/ ?>