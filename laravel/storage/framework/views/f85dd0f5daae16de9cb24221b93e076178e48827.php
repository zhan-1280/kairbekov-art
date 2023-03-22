<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title ?? 'Saukele'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="/img/radius-logo.svg" type="image/x-icon">
</head>

<body>
    <div id="app" class="bg-white app">
        <div class="container p-0 header">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="w-100 flex-column">
                    <div class="d-flex w-100 align-center justify-content-around">
                        <div class="phone-div d-flex align-center justify-content-center">
                            <div class="phone-text text-center">
                                <a href="tel:+79088058925" class="text-black decoration-none">+7(962)047-39-00</a>
                                <a href="tel:+79088058925" class="text-black">Обратная связь</a>
                            </div>
                        </div>
                        <div class="img-toggler d-flex justify-content-around">
                            <a class="d-none phone" href="tel:+79088058925"><img src="/img/phone.svg"
                                    alt="phone"></a>
                            <a class="navbar-brand me-0 p-3" href="<?php echo e(url('/')); ?>">
                                <img class="logo" src="/img/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse top_collapse d-none-mobile" id="navbarSupportedContent">
                            <!-- Right Side Of Navbar -->
                            <div class="navbar-nav">
                                <div class="nav-item">
                                    <a class="nav-link" href="https://vk.com/saukele_omsk">
                                        <img class="vk" src="/img/vk.svg" alt="">
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/cart">
                                        <img class="busket" src="/img/busket.svg" alt="">
                                        
                                    </a>
                                </div>
                                <!-- Authentication Links -->
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(Route::has('login')): ?>
                                        <div class="nav-item like_at_login">
                                            <a class="nav-link btn person-btn h-100" href="<?php echo e(route('login')); ?>"><img
                                                    class="auth" src="/img/person.svg" alt="<?php echo e(__('Login')); ?>"></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/orders">Заказы</a>
                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Выход</a>

                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                    class="d-none">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="nav-item dropdown">
                                        <a class="btn person-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/img/person.svg" alt="logo">
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/orders">Заказы</a>
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Выход</a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbarSupportedContentTwo w-100" id="navbarSupportedContent">
                        <div class="navbar-nav navbar-mobile w-100">
                            <div class="navbar-nav navbar-mobile-nav d-flex justify-content-around">
                                <div class="nav-item">
                                    <a class="nav-link mobile text-black" href="/">Главная</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link mobile text-black" href="/catalog">Каталог</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link mobile text-white" href="/#about">О нас</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link mobile text-white" href="/#contacts">Контакты</a>
                                </div>
                            </div>
                            <div class="navbar-nav d-none-desktop">
                                <div class="nav-item">
                                    <a class="nav-link" href="https://vk.com/saukele_omsk">
                                        <img class="vk" src="/img/vk.svg" alt="">
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/cart">
                                        <img class="busket" src="/img/busket.svg" alt="">
                                    </a>
                                </div>
                                <!-- Authentication Links -->
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(Route::has('login')): ?>
                                        <div class="nav-item like_at_login">
                                            <a class="nav-link btn person-btn h-100" href="<?php echo e(route('login')); ?>"><img
                                                    class="auth" src="/img/person.svg" alt="<?php echo e(__('Login')); ?>"></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/orders">Заказы</a>
                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Выход</a>

                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                    class="d-none">
                                                    <?php echo csrf_field(); ?>
                                                </form>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="nav-item dropdown">
                                        <a class="btn person-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="/img/person.svg" alt="logo">
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/orders">Заказы</a>
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Выход</a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <main class="z-index-1">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <footer>
            <div class="container footer">
                <div class="d-flex flex-wrap justify-content-around footer-partners">
                    <div class="d-flex justify-content-center d-none-desktop">
                        <a class="d-none-desktop partner1" href="https://vk.com/kazahi_omska">
                            <img src="/img/omby-kazaktar-mini.svg" width="210px" height="113px" alt="Спонсор">
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="/img/logo.svg" alt="Лого" class="logo">
                        </a>
                    </div>
                    <div class="d-flex justify-content-around mobile_w-100 partner2-div">
                        <a class="d-none d-none-mobile w-mobile partner1-mobile" href="https://www.kazahiomska.ru/">
                            <img src="/img/omby-kazaktar-mini.svg" alt="Спонсор">
                        </a>
                        <a class="w-mobile partner2" href="https://www.kazahiomska.ru/">
                            <img src="/img/KO-mini.svg" alt="Спонсор">
                        </a>
                    </div>
                </div>
                <div class="footer-menu d-flex flex-wrap justify-content-around mt-5">
                    <div class="desctop mobile d-flex flex-wrap justify-content-around w-25">
                        <div class="d-flex flex-column">
                            <a class=" text text-black decoration-none text1rem" href="/">Главная</a>
                            <a class="mt-3 text text-black decoration-none text1rem" href="/catalog">Каталог</a>
                        </div>
                        <div class="d-flex flex-column">
                            <a class=" text text-black decoration-none text1rem" href="/#about">О нас</a>
                            <a class="mt-3 text text-black decoration-none text1rem" href="/#contacts">Контакты</a>
                        </div>
                        <div class="d-flex flex-column">
                            <a class=" text text-black decoration-none text1rem white-text" href="/cart">Корзина</a>
                            <a class="mt-3 text text-black decoration-none text1rem white-text"
                                href="/orders">Заказы</a>
                        </div>
                    </div>
                    <div class="desctop mobile d-flex flex-wrap justify-content-around w-25 mt-3_mobile">
                        <div class="d-flex flex-column">
                            <a class=" text text-white decoration-none text1rem black-text"
                                href="tel:+79088058925">+7(962)047-39-00</a>
                            <a class="mt-3 text text-white decoration-none text1rem black-text"
                                href="mailto:kuho007@mail.ru?subject=Вопрос с сайта Saukele-Omsk.ru&body=Здравствуйте, ">kuho007@mail.ru</a>
                        </div>
                        <div class="d-flex flex-column">
                            <a class=" text text-white decoration-none text1rem" href="https://yandex.ru/maps/?um=constructor%3A008028625d0b227fc446a2cac6528f4ba88129d7f470e99485874cb0a81eb245&source=constructorLink">Ул.Ленина 38
                                оф.401</a>
                            <a class="mt-3 text text-white decoration-none text1rem" href="https://vk.com/saukele_omsk">Вконтакте</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
<?php /**PATH C:\OpenServer\domains\localhost-saukele\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>