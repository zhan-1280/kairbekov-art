<?php $__env->startSection('content'); ?>
    <div class="container catalog mb-5 pt-5 z-index-1">
        <h1 class="text-36px ms-5">Каталог товаров</h1>
        <div class="row">
            <div class="col-md-2 left">
                <div class="filters">
                    <form action="<?php echo e(route('catalog')); ?>" method="GET">
                        <div class="form-group">
                            <label for="category">Категория:</label>
                            <select name="category" class="form-control form-category" id="category">
                                <option value="">Все категории</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"
                                        <?php echo e($category->id == request()->query('category') ? 'selected' : ''); ?>>
                                        <?php echo e($category->name_category); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="d-flex flex-column">
                            <label>Сортировка:</label>
                            <div class="ms-2 form-check">
                                <input class="form-check-input" type="radio" name="sort_by" id="sort_by_name"
                                    value="name" <?php echo e(request()->query('sort_by') == 'name' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="sort_by_name">
                                    По имени
                                </label>
                            </div>
                            <div class="ms-2 form-check">
                                <input class="form-check-input" type="radio" name="sort_by" id="sort_by_price"
                                    value="price" <?php echo e(request()->query('sort_by') == 'price' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="sort_by_price">
                                    По цене
                                </label>
                            </div>
                            <div class="ms-2 form-check">
                                <input class="form-check-input" type="radio" name="sort_by" id="sort_by_year"
                                    value="year" <?php echo e(request()->query('sort_by') == 'year' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="sort_by_year">
                                    По году производства
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Применить</button>
                    </form>

                </div>
            </div>
            <div class="col-md-10 right">
                <div class="products">
                    <?php if($products->isEmpty()): ?>
                        <div class="alert alert-danger w-100 m-0" role="alert">
                            <h2 class="m-0 p-0">Каталог пуст.</h2>
                        </div>
                    <?php else: ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product">
                                <a href="<?php echo e(route('product', $product->id)); ?>"
                                    class="text-black none-underline product_link">
                                    <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                                    <h3 class="mt-3 text-red text-center"><strong><?php echo e($product->name); ?></strong></h3>
                                    <p class="price w-100 text-center text-25px"><?php echo e($product->price); ?> руб.</p>
                                    <form action="<?php echo e(route('cart.add', ['productId' => $product->id])); ?>" method="POST"
                                        class="w-100">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary w-100 mt-3 text-25px ">Добавить в
                                            корзину</button>
                                    </form>
                                </a>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/catalog.blade.php ENDPATH**/ ?>