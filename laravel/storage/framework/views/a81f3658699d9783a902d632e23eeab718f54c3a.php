

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Заказ #<?php echo e($order->id); ?></h1>
        <p>Дата создания заказа: <?php echo e($order->created_at); ?></p>
        <p>Статус заказа: <?php echo e($order->status); ?></p>
        <table class="table">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Количество</th>
                    <th>Цена за единицу</th>
                    <th>Итоговая стоимость</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->product->name); ?></td>
                        <td><?php echo e($item->quantity); ?></td>
                        <td><?php echo e($item->price); ?></td>
                        <td><?php echo e($item->quantity * $item->price); ?>руб.</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr class="">
                    <td colspan="1">Общая стоимость:</td>
                    <td colspan="2">
                        <p>
                            <strong>
                                <?php echo e($order->items->sum(function ($cart) {return $cart->product->price * $cart->quantity;})); ?>

                                руб.
                            </strong>
                        </p>
                    </td>
                    <td>
                        <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                        </form>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/orders/show.blade.php ENDPATH**/ ?>