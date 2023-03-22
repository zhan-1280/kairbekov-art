 <?php $__env->startSection('content'); ?>
    <section class="index__start_window z-index-1 p-relative">
        <!-- Стартовое окно -->
        <div class="container start-window start-window-height">
            <div class="row">
                <div class="col-md-8">
                    <img src="/img/salta-start.svg" alt="start_img" class="w-100">
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-between">
                        <h1 class="mt-5 text-white text-36px"><strong>Магазин казахских товаров - для почтения
                                культуры</strong></h1>
                        <ul class="mt-5 text-yellow line_height-150 text-30px">
                            <li class="mt-0">Казахские платья</li>
                            <li class="mt-5">Национальные украшения</li>
                            <li class="mt-5">Фотосессии</li>
                        </ul>
                        <div class="arrow margin-arrow ms-auto p-relative">
                            <a href="/catalog"><img src="img/Arrow.svg" alt=""></a>
                            <a href="/catalog" class="text-white text18px uline">
                                <p>Перейти к каталогу</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Слайдер с товарами -->
    <section class="index__catalog_items mt-5 mb-5">
        <div class="container">
            <div class="row">
                <?php if($products->isEmpty()): ?>
                    <h2 class="text-start ms-5 mb-3 text-36px index__catalog_title w-90"><strong>Наши новинки</strong></h2>
                    <div class="alert alert-danger m-0" role="alert">
                        <h2 class="m-0 p-0">Каталог пуст.</h2>
                    </div>
                <?php else: ?>
                    <h2 class="text-start ms-5 mb-5 text-36px index__catalog_title"><strong>Наши новинки</strong></h2>
                    <div class="d-flex justify-content-between flex-mobile-column ">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product mobile-product">
                                <a href="<?php echo e(route('product', $product->id)); ?>" class="none-underline">
                                    <img src="/img/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                                    <h3 class="mt-3 text-white text-25px"><?php echo e($product->name); ?></h3>
                                    <p class="price text-25px w-100 text-center"><strong><?php echo e($product->price); ?> руб.</strong>
                                    </p>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="w-100 text-center mt-5 text-black" href="<?php echo e(url('/catalog')); ?>">Перейти к
                        каталогу</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <section class="index__about mb-5" id="about">
        <div class="container red-bg">
            <div class="row">
                <div class="col-md-4 left">
                    <h3 class="text-center text-36px mt-4 text-white"><strong>О Саукеле Омск</strong></h3>
                    <p class="ms-3 text-25px mt-4 text-yellow">Национальные наряды (женские и мужские костюмы, детские
                        платья, головные
                        уборы и жилетки) в ПРОКАТ!<br><br>НАЦИОНАЛЬНАЯ фотосессия под ключ Lovestory в казахском
                        стиле.<br><br>Все для казахских обрядов - қырқынан шығару, тұсау кесер, қыз ұзату.<br><br>Здесь вы
                        узнаете о новых поступлениях бижутерии, аксессуаров, казахских сувениров и подарков, всегда
                        заберете свежий номер "Омбы Казактары" и можете оставить заявку на ОТАУ ТВ.</p>
                </div>
                <div class="col-md-8 right p-5 d-flex">
                    <img src="/img/arukiz.svg" alt="" class="ms-auto">
                </div>
            </div>
        </div>
    </section>
    
    <section class="index__partners mb-5">
        <div class="container">
            <h2 class="text-36px ms-5 mb-5">Наши спонсоры</h2>
            <div class="row">
                <div class="col-md-6">
                    <a href="https://vk.com/kazahi_omska"><img src="/img/omby-kazaktar-mini.svg" alt=""
                            class="w-100"></a>
                </div>
                <div class="col-md-6 red-bg">
                    <a href="https://www.kazahiomska.ru/"><img src="/img/KO.svg" alt="" class="w-100"></a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="index__contacts mb-5" id="contacts">
        <div class="container">
            <h2 class="text-36px ms-5 mb-5">Контакты</h2>
            <div class="contact_list">
                <a href="https://vk.com/saukele_omsk" class="text-25px text-black"><img src="/img/vk.svg" alt=""
                        class="me-3">Вконтакте</a>
                <a href="https://www.kazahiomska.ru/" class="text-25px text-black"><img src="/img/ru.svg" alt=""
                        class="me-3">kazahiomska.ru</a>
                <a href="tel:+79088058925" class="text-25px text-black"><img src="/img/phone.svg" alt=""
                        class="me-3">+7 (908) 805-89-25</a>
                <a href="mailto:kuho007@mail.ru?subject=Вопрос с сайта Saukele-Omsk.ru&body=Здравствуйте, " class="text-25px text-black"><img src="/img/mail.svg" alt=""
                        class="me-3">kuho007@mail.ru</a>
            </div>
        </div>
    </section>
    
    <section class="index__map mb-5">
        <div class="container map">
            <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acdea4dad2e0eea5c58974520c7f4d394fa484ca4fa82b2e33c420db8349eda2b&amp;lang=ru_RU&amp;scroll=falce">
            </script>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/welcome.blade.php ENDPATH**/ ?>