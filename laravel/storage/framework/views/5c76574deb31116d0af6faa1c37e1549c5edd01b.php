<?php $__env->startSection('content'); ?>
    <div class="container  ">
        <div class="card-header">
            <h1>Корзина</h1>
        </div>
        <?php if($carts->isEmpty()): ?>
            <div class="alert alert-info" role="alert">
                Корзина пуста.
            </div>
        <?php else: ?>
            <table class="w-100">
                <thead class="w-100">
                    <tr class="d-flex justify-content-between w-100 cart__tr_head">
                        <th class="w-33 text-start">Фото</th>
                        <th class="w-33 text-center">Название</th>
                        <th class="w-33 text-center">Колличество</th>
                        <th class="w-33 text-end">Цена</th>
                        <th class="w-33 text-end"></th>
                    </tr>
                </thead>
                <tbody class="mobile-dnone flex-column">
                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="d-flex justify-content-between w-100 mb-3 cart__tr_body">
                            <td class="w-33 d-flex justify-content-start align-center"><img
                                    src="/public/img/<?php echo e($cart->product->image); ?>" alt="product-photo" class="cart-img">
                            </td>
                            <td class="w-33 d-flex justify-content-center align-center">
                                <strong><?php echo e($cart->Product->name); ?></strong>
                            </td>
                            <td class="w-33 d-flex justify-content-center align-center">
                                <a href="/public/remove-from-card/<?php echo e($cart->product_id); ?>"
                                    class="btn btn-primary m-auto">-</a>
                                <?php echo e($cart->quantity); ?>шт
                                <a href="/public/add-on-cart/<?php echo e($cart->product_id); ?>" class="btn btn-primary m-auto">+</a>
                            </td>
                            <td class="w-33 d-flex justify-content-end align-center">
                                <?php echo e(intval($cart->Product->price) * $cart->quantity); ?>руб.</td>
                            <td class="w-33 d-flex justify-content-end align-center"><a
                                    href="<?php echo e(route('cart.remove.all', ['cartId' => $cart->id])); ?>"
                                    class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tbody class="desktop-dnone flex-column">
                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="d-flex justify-content-between w-100 mb-3 cart__tr_body">
                            <td class="w-50 d-flex justify-content-start align-center"><img
                                    src="/public/img/<?php echo e($cart->product->image); ?>" alt="product-photo" class="cart-img w-100">
                            </td>
                            <td class="w-33 d-flex justify-content-start align-center w-100 ps-4">
                                <div class="w-100">
                                    <p><strong><?php echo e($cart->product->name); ?></strong></p>
                                    <div class="d-flex mb-3 justify-content-start w-70">
                                        <a href="/public/remove-from-card/<?php echo e($cart->product_id); ?>"
                                            class="btn btn-primary">-</a>
                                        <p class="m-auto"><?php echo e($cart->quantity); ?>шт.</p>
                                        <a href="/public/add-on-cart/<?php echo e($cart->product_id); ?>" class="btn btn-primary">+</a>
                                    </div>
                                    <p class="m-auto"><?php echo e(intval($cart->Product->price) * $cart->quantity); ?>руб.</p>
                                </div>
                            </td>
                            <td class="w-33 d-flex justify-content-end align-center"><a
                                    href="<?php echo e(route('cart.remove.all', ['cartId' => $cart->id])); ?>"
                                    class="btn btn-danger">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr class="d-flex justify-content-between w-100 cart__tr_foot">
                        <td colspan="3">Общая стоимость:</td>
                        <td><strong><?php echo e($carts->sum(function ($cart) {return $cart->product->price * $cart->quantity;})); ?>

                                руб.</strong></td>
                    </tr>
                </tfoot>
            </table>
            
            <div>
                <p class="m-0">Для того чтобы оформить заказ введите пароль:</p>
                <form action="<?php echo e(route('orders.store')); ?>" method="POST" class="">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input id="password" type="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Сформировать заказ</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/cart.blade.php ENDPATH**/ ?>