

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Заказ #<?php echo e($order->id); ?></h1>
        <p>Дата заказа: <?php echo e($order->created_at); ?></p>
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
        <h2>Товары:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="/img/<?php echo e($item->product->image); ?>" alt="product-image-<?php echo e($item->id); ?>"></td>
                        <td><?php echo e($item->product->name); ?></td>
                        <td><?php echo e($item->price); ?> руб.</td>
                        <td><?php echo e($item->quantity); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\laravel\resources\views/admin/view_order.blade.php ENDPATH**/ ?>