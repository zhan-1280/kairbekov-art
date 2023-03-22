

<?php $__env->startSection('content'); ?>
    <div class="container admin__view_order z-index-1">
        <div class="row cart__items">
            <div class="col-md-3 left">
                <h1 class="mb-3 text-30px">Заказ №<?php echo e($order->id); ?></h1>
                <p>Дата заказа: <?php echo e($order->created_at); ?> (+0 GMT)</p>
                <p>Статус: <?php if($order->status == 'Подтвержден'): ?>
                        <a class="btn btn-success m-auto"><?php echo e($order->status); ?></a>
                    <?php elseif($order->status == 'Отменен'): ?>
                        <a class="btn btn-danger m-auto"><?php echo e($order->status); ?></a>
                    <?php elseif($order->status !== 'Отменен' && $order->status !== 'Подтвержден'): ?>
                        <a class="btn btn-primary m-auto">Новый</a>
                    <?php endif; ?>
                </p>
                <p>ФИО заказчика: <strong><?php echo e($order->user->surname); ?> <?php echo e($order->user->name); ?>

                        <?php echo e($order->user->patronymic); ?></strong></p>
                <p>
                    <strong>Итого:
                        <?php echo e($order->items->sum(function ($cart) {return $cart->product->price * $cart->quantity;})); ?>

                        руб.</strong>
                </p>
                <?php if($order->status == 'Новый'): ?>
                    <div class="d-flex">
                        <form method="POST" action="<?php echo e(route('admin.cancelOrder', $order->id)); ?>" class="ms-0">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Отменить</button>
                        </form>
                        <form method="POST" action="<?php echo e(route('admin.confirmOrder', $order->id)); ?>" class="ms-5">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-success">Подтвердить</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-8 right ms-5 order__cart_info">
                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="busket-card row white-bg br-15px mb-4 me-4 w-100">
                        <div class="col-md-6">
                            <img src="/img/<?php echo e($item->product->image); ?>" alt="product-image-<?php echo e($item->id); ?>"
                                class="w-100"></td>
                        </div>
                        <div class="col-md-6 d-flex justify-content-around flex-column right p-3">
                            <P class="border_strong text-25px">Название товара: <strong><?php echo e($item->product->name); ?></strong></P>
                            <P class="border_strong text-25px">Цена: <strong><?php echo e(intval($item->price)); ?> руб.</strong></P>
                            <P class="border_strong text-25px">Количество: <strong><?php echo e($item->quantity); ?> шт.</strong></P>
                            <p class="border_strong text-25px">Размер: <strong><?php echo e($item->product->size); ?></strong></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/admin/view_order.blade.php ENDPATH**/ ?>