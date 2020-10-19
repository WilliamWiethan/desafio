<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h1> Edição de Associado</h1>
    <form action="<?php echo e(route('associados.update', ['id' => $associado->id])); ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control<?php echo e($errors->has('nome') ? ' is-invalid' : ''); ?>" name="nome"
                    value="<?php echo e($associado->nome); ?>">
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
                    value="<?php echo e($associado->cpf); ?>">
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/associados/edit.blade.php ENDPATH**/ ?>