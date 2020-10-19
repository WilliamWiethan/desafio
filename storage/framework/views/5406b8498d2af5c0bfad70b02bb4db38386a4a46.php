<?php $__env->startSection('content'); ?>
<h1> Novo Associado</h1>

<form action="<?php echo e(route('associados.store')); ?>" method="post">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control<?php echo e($errors->has('nome') ? ' is-invalid' : ''); ?>" name="nome"
                value="<?php echo e(old('nome')); ?>">
            <?php if($errors->has('nome')): ?>
            <span class="invalid-feedback">
                <strong>
                    <?php echo e($errors->first('nome')); ?>

                </strong>
            </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control<?php echo e($errors->has('cpf') ? ' is-invalid' : ''); ?>" name="cpf"
                value="<?php echo e(old('cpf')); ?>">
            <?php if($errors->has('cpf')): ?>
            <span class="invalid-feedback">
                <strong>
                    <?php echo e($errors->first('cpf')); ?>

                </strong>
            </span>
            <?php endif; ?>
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/associados/new.blade.php ENDPATH**/ ?>