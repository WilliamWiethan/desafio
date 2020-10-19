<?php $__env->startSection('content'); ?>
<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Importação de Arquivo CSV
                    </div>
                    <div class="card-body text-center">
                        <form method="POST" enctype="multipart/form-data" action="<?php echo e(route('contas.import')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="file" name="file" class="form-control-file">
                                <?php if($errors): ?>
                                <span class="text-danger">
                                    <strong>
                                        <?php echo e($errors->first()); ?>

                                    </strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-dark">Carregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/contas/importForm.blade.php ENDPATH**/ ?>