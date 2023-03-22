<?php $__env->startSection('content'); ?>
    <div class="container catalog">
        <h1>Каталог товаров</h1>

        <div class="filters">
            <form method="get" class="filter__form">
                <select name="category">
                    <option value="">Все категории</option>
                    <option value="1">Лазерные принтеры</option>
                    <option value="2">Струйные принтеры</option>
                    <option value="3">Термопринтеры</option>
                </select>

                <select name="sort_by">
                    <option value="created_at">По новизне</option>
                    <option value="price">По цене</option>
                    <option value="year">По году выпуска</option>
                    <option value="name">По наименованию</option>
                </select>

                <select name="sort_order">
                    <option value="desc">По убыванию</option>
                    <option value="asc">По возрастанию</option>
                </select>

                <button type="submit" class="btn btn-primary">Применить</button>
            </form>
        </div>

        <div class="products">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product">
                    <a href="<?php echo e(route('product', $product->id)); ?>" class="text-black none-underline product_link">
                        <img src="/public/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/catalog.blade.php ENDPATH**/ ?>