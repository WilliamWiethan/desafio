<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
</head>

<body style="background-color:#f8f9fa">
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('associados.index')); ?>">Associados</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('contas.importForm')); ?>">Importação</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('agencias.associadoPorAgencia')); ?>">Associados/Agencias</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/layout.blade.php ENDPATH**/ ?>