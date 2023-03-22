

<?php $__env->startSection('content'); ?>
    <h1>Мои заказы</h1>

    <?php if($orders->isEmpty()): ?>
        <p>Вы еще не сделали ни одного заказа</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Номер заказа</th>
                    <th>Дата создания</th>
                    <th>Количество товаров</th>
                    <th>Общая стоимость</th>
                    <th>Статус</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->created_at); ?></td>
                        <td><?php echo e($order->items->sum('quantity')); ?></td>
                        <td><?php echo e($order->items->sum(function ($item) { return $item->quantity * $item->price; })); ?> руб.</td>
                        <td><?php echo e($order->statusText); ?></td>
                        <td>
                            <?php if($order->status === App\Models\Order::STATUS_NEW): ?>
                                <form method="post" action="<?php echo e(route('orders.destroy', ['id' => $order->id])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/ordersindex.blade.php ENDPATH**/ ?>