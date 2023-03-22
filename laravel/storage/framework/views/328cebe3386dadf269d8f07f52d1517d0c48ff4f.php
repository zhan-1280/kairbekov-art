<?php $__env->startSection('content'); ?>
    <div class="container about">
        <h1>Copy Star <br><strong>О нас:</strong></h1>
        <div class="d-flex mb-5 flex-mobile-column">
            <img src="/img/logo.png" class="about__logo desktop-dnone about__logo_mobile" alt="">
            <div class="me-auto">
                <p>Мы молодая и динамично развивающаяся компания, специализирующаяся на продаже высококачественного
                    копировального оборудования предприятиям любого размера. Делая акцент на предоставлении исключительного
                    обслуживания клиентов и первоклассных продуктов, Copy Star стремится помочь предприятиям повысить свою
                    производительность и эффективность за счет оптимизированных процессов копирования.</p>
                <p>В Copy Star клиенты могут рассчитывать на широкий спектр вариантов копировального оборудования, включая
                    черно-белые и цветные копировальные аппараты, а также многофункциональные устройства, которые могут
                    выполнять печать, сканирование и отправку факсов в дополнение к копированию. Компания предлагает как
                    новые, так и восстановленные копировальные аппараты по конкурентоспособным ценам и вариантам
                    финансирования, чтобы сделать высококачественное оборудование доступным для предприятий с любым
                    бюджетом.</p>
                <p>Помимо продажи копировальных аппаратов, Copy Star также предоставляет постоянную поддержку и техническое
                    обслуживание, чтобы гарантировать, что оборудование клиентов будет работать наилучшим образом в
                    долгосрочной перспективе. Знающие и опытные технические специалисты компании могут оказать помощь как на
                    месте, так и удаленно, а также плановое техническое обслуживание для обеспечения бесперебойной работы
                    копировальных аппаратов.</p>
                <p>Copy Star гордится своей приверженностью удовлетворенности клиентов, с командой дружелюбных и услужливых
                    продавцов и сотрудников службы поддержки, готовых помочь клиентам на каждом этапе процесса покупки и
                    владения. Независимо от того, хотите ли вы модернизировать свое копировальное оборудование или
                    оборудовать новый офис новейшими технологиями, Copy Star — это надежный поставщик высококачественного
                    копировального оборудования и исключительного обслуживания.</p>
            </div>
            <img src="/img/logo.png" class="about__logo ms-auto mt-auto mb-auto mobile-dnone" alt="">
        </div>
        <h2 class="text-start w-100 mt-5 mb-4">Новинки</h2>
        <div id="carouselExample" class="carousel slide mb-5">
            <div class="carousel-inner container">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around flex-mobile-column ">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product mobile-product">
                                <a href="<?php echo e(route('product', $product->id)); ?>">
                                    <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                                    <h3><?php echo e($product->name); ?></h3>
                                    <p class="price"><?php echo e($product->price); ?> руб.</p>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around flex-mobile-column ">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product mobile-product">
                                <a href="<?php echo e(route('product', $product->id)); ?>">
                                    <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                                    <h3><?php echo e($product->name); ?></h3>
                                    <p class="price"><?php echo e($product->price); ?> руб.</p>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\laravel\resources\views/welcome.blade.php ENDPATH**/ ?>