<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo e($product->name); ?></h1>
                <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="img-thumbnail">
                <p>Цена: <?php echo e($product->price); ?> руб.</p>
                <p>Страна-производитель: <?php echo e($product->country); ?></p>
                <p>Год выпуска: <?php echo e($product->year); ?></p>
                <p>Модель: <?php echo e($product->model); ?></p>
                <p><?php echo e($product->description); ?></p>
                <form action="<?php echo e(route('cart.add', $product->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                  </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\laravel\resources\views/product.blade.php ENDPATH**/ ?>