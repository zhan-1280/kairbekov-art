

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Orders</div>

                    <div class="card-body">
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">№</th>
                                    <th class="text-center">ФИО</th>
                                    <th class="text-center">Предметы</th>
                                    <th class="text-center">Сумма</th>
                                    <th class="text-center">Статус</th>
                                    <th class="text-center">Заказ создан</th>
                                    <th class="text-center">Подтвердить\Отклонить</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($order->id); ?></td>
                                        <td><?php echo e($order->user->surname); ?><br><?php echo e($order->user->name); ?><br><?php echo e($order->user->patronymic); ?>

                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($item->product->name); ?> x <?php echo e($item->quantity); ?><br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php echo e($order->items->sum(function ($cart) {return $cart->product->price * $cart->quantity;})); ?>

                                            руб.</td>
                                        <td class="">
                                            <?php if($order->status == 'Подтвержден'): ?>
                                                <div class="d-flex">
                                                    <a class="btn btn-success m-auto"><?php echo e($order->status); ?></a>
                                                </div>
                                            <?php elseif($order->status == 'Отменен'): ?>
                                                <div class="d-flex">
                                                    <a class="btn btn-danger m-auto"><?php echo e($order->status); ?></a>
                                                </div>
                                            <?php elseif($order->status !== 'Отменен' && $order->status !== 'Подтвержден'): ?>
                                                <div class="d-flex">
                                                    <a class="btn btn-primary m-auto">Новый</a>
                                                </div>
                                            <?php endif; ?>
                                        <td><?php echo e($order->created_at); ?></td>
                                        <td>
                                            <div class="d-flex">
                                            <a href="<?php echo e(route('admin.viewOrder', $order->id)); ?>"
                                                class="w-82 ms-auto me-auto btn btn-primary mb-1">Подробнее</a></div>
                                            <?php if($order->status == 'Новый'): ?>
                                                <div class="d-flex">
                                                    <form method="POST"
                                                        action="<?php echo e(route('admin.cancelOrder', $order->id)); ?>"
                                                        class="m-auto">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-danger">Отменить</button>
                                                    </form>
                                                    <form method="POST"
                                                        action="<?php echo e(route('admin.confirmOrder', $order->id)); ?>"
                                                        class="m-auto">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-success">Подтвердить</button>
                                                    </form>
                                                </div>
                                            <?php elseif($order->status == 'Подтвержден'): ?>
                                                <div class="d-flex"><a
                                                        class="btn btn-success m-auto"><?php echo e($order->status); ?></a></div>
                                            <?php elseif($order->status == 'Отменен'): ?>
                                                <div class="d-flex"><a
                                                        class="btn btn-danger m-auto"><?php echo e($order->status); ?></a></div>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/admin/orders.blade.php ENDPATH**/ ?>