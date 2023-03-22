

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <h1>Мои заказы</h1>
        </div>
        <?php if(count($orders) > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col"><?php echo e(__('Номер заказа')); ?></th>
                        <th class="text-center" scope="col"><?php echo e(__('Дата')); ?></th>
                        <th class="text-center" scope="col"><?php echo e(__('Статус')); ?></th>
                        <th class="text-center" scope="col"><?php echo e(__('Количество товаров')); ?></th>
                        <th class="text-center" scope="col"><?php echo e(__('Сумма')); ?></th>
                        <th class="text-center" scope="col"><?php echo e(__('Действия')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($order->id); ?></td>
                            <td class="text-center"><?php echo e($order->created_at->format('d.m.Y H:i')); ?></td>
                            <td class="text-center"><?php echo e($order->status); ?></td>
                            <td class="text-center"><?php echo e($order->items->sum('quantity')); ?></td>
                            <td class="text-center">
                                <?php echo e($order->items->sum(function ($cart) {return $cart->product->price * $cart->quantity;})); ?>

                                руб.</td>
                            <td class="d-flex justify-content-center">
                                <?php if($order->status == 'Новый'): ?>
                                    <a href="<?php echo e(route('orders.show', ['order' => $order->id])); ?>" class="btn btn-primary">
                                        <?php echo e(__('Просмотреть')); ?>

                                    </a>
                                    <form action="<?php echo e(route('orders.destroy', $order->id)); ?>" method="POST" class="ms-1">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm h-100">Удалить</button>
                                    </form>
                                <?php else: ?>
                                    <a href="<?php echo e(route('orders.show', ['order' => $order->id])); ?>" class="btn btn-primary">
                                        <?php echo e(__('Просмотреть')); ?>

                                    </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-info" role="alert">
                У вас пока нет заказов
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\laravel\resources\views/orders/index.blade.php ENDPATH**/ ?>