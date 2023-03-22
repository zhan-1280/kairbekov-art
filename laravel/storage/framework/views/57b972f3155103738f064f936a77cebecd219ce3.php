<?php $__env->startSection('content'); ?>
    <div class="container product_index pt-3 pb-5 z-index-1">
        <div class="d-flex mb-3 ms-5">
            <a href="<?php echo e(url('/catalog')); ?>" class="text-black none-underline">Каталог</a>
            <img src="/img/arrow-black.svg" alt="-->" class="ms-3 me-3">
            <a href="<?php echo e(route('product', $product->id)); ?>" class="text-black none-underline"><?php echo e($product->name); ?></a>
        </div>
        <div class="row">
            <div class="col-md-7">
                <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="img-thumbnail w-100 h-100">
            </div>
            <div class="col-md-5 red-bg">
                <div class="poduct__right">
                    <h2 class="text-36px mt-1 text-white mt-5"><?php echo e($product->name); ?></h2>
                    <p class="product__price text-25px text-red mt-4 mb-5"><?php echo e($product->price); ?> руб.</p>
                    <p class="product__size mt-4 text-25px text-white">Размер: <strong
                            class="ms-2"><?php echo e($product->size); ?></strong></p>
                    <form action="<?php echo e(route('cart.add', $product->id)); ?>" method="POST" class="d-flex flex-column pe-5">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn__in_cart mt-3">В корзину</button>
                    </form>
                    <p class="text-25px mt-5 text-white">Описание:<br><?php echo e($product->description); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/product.blade.php ENDPATH**/ ?>