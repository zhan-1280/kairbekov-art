<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title ?? 'True Games'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="/public/img/logo.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="/public/img/logo.png" alt="Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li><a class="nav-link" href="<?php echo e(url('/')); ?>">О нас</a></li>
                        <li><a class="nav-link" href="<?php echo e(url('/where')); ?>">Где нас найти?</a></li>
                        <li><a class="nav-link" href="<?php echo e(url('/catalog')); ?>">Каталог</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Войти')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Зарегистрироваться')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li>
                                <a class="nav-link dropdown-item" href="<?php echo e(route('cart.show')); ?>">
                                    <?php echo e(__('Корзина')); ?>

                                </a>
                            </li>
                            <li>
                                <a class="nav-link dropdown-item" href="<?php echo e(route('orders.index')); ?>">
                                    <?php echo e(__('Заказы')); ?>

                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>



                                <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdown">
                                    <a class="nav-link dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Выход')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 w-100 h-100">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <footer class="w-100">
            <p class="text-center text-uppercase">Copy Star</p>
        </footer>
    </div>
    <script src="<?php echo e(asset('/js/script.js')); ?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>

</html>
<?php /**PATH C:\OpenServer\domains\localhost\resources\views/layouts/app.blade.php ENDPATH**/ ?>