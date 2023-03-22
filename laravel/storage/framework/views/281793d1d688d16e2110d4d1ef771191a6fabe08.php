

<?php $__env->startSection('content'); ?>
    <div class="container admin_orders z-index-1">
        <h1 class="mb-3 text-30px">Заказы</h1>
        <div class="row cart__items">
            <div class="col-md-3 left">
                <form action="<?php echo e(route('admin.orders')); ?>" method="GET">
                    <div class="form-group">
                        <label for="status">Статус:</label>
                        <select name="status" id="status" class="form-control">
                            <option value=""
                                <?php echo e($status !== 'Новый' && $status !== 'Подтвержден' && $status === 'Отменен' ? 'selected' : ''); ?>>
                                Все</option>
                            <option value="Новый" <?php echo e($status === 'Новый' ? 'selected' : ''); ?>>Новый</option>
                            <option value="Подтвержден" <?php echo e($status === 'Подтвержден' ? 'selected' : ''); ?>>
                                Подтвержденный</option>
                            <option value="Отменен" <?php echo e($status === 'Отменен' ? 'selected' : ''); ?>>Отмененный
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Фильтр</button>
                </form>
            </div>
            <div class="col-md-8 right ms-5">
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="busket-card row white-bg br-15px mb-4 me-4 w-100 text-25px">
                        <div class="d-flex flex-column justify-content-around p-4">
                            <div class="d-flex">
                                <p class="me-3">№<?php echo e($order->id); ?></p>
                                <p>ФИО: <strong><?php echo e($order->user->surname); ?> <?php echo e($order->user->name); ?>

                                        <?php echo e($order->user->patronymic); ?></strong>
                                </p>
                            </div>
                            <p><?php echo e($order->created_at); ?> (+0 GMT)</p>
                            <div class="d-flex justify-content-between flex-column">

                                <p class="border_strong m-4 ms-0 mb-3 mt-0">Предметы:
                                    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <strong><?php echo e($item->product->name); ?> x <?php echo e($item->quantity); ?></strong>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <p class="border_strong m-4 ms-0">Сумма:
                                    <strong><?php echo e($order->items->sum(function ($cart) {return $cart->product->price * $cart->quantity;})); ?>

                                        руб.</strong>
                                </p>
                                <p class="">Статус
                                    <?php if($order->status == 'Подтвержден'): ?>
                                        <strong class="btn btn-success m-auto text-25px"><?php echo e($order->status); ?></strong>
                                    <?php elseif($order->status == 'Отменен'): ?>
                                        <strong class="btn btn-danger m-auto text-25px"><?php echo e($order->status); ?></strong>
                                    <?php elseif($order->status !== 'Отменен' && $order->status !== 'Подтвержден'): ?>
                                        <strong class="btn btn-primary m-auto text-25px">Новый</strong>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('admin.viewOrder', $order->id)); ?>"
                                        class="w-50 ms-0 me-auto btn btn-primary mb-1 text-25px me-auto">Подробнее</a>

                                    <?php if($order->status == 'Новый'): ?>
                                        <div class="d-flex">
                                            <form method="POST" action="<?php echo e(route('admin.cancelOrder', $order->id)); ?>"
                                                class="m-auto">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger text-25px">Отменить</button>
                                            </form>
                                            <form method="POST" action="<?php echo e(route('admin.confirmOrder', $order->id)); ?>"
                                                class="m-auto">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit"
                                                    class="btn btn-success text-25px">Подтвердить</button>
                                            </form>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/admin/orders.blade.php ENDPATH**/ ?>