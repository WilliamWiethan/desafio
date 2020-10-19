<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1> Edição de Conta</h1>
            <h3 class="font-weight-bold">Associado: <?php echo e($associado->nome); ?></h3>
        </div>
    </div>
    <form action="<?php echo e(route('contas.update', ['associado_id' => $associado->id, 'conta' => $contaData->conta])); ?>"
        method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" onfocus="this.blur()" value="<?php echo e($associado->cpf); ?>">
            <?php if($errors->has('cpf')): ?>
            <span class="invalid-feedback">
                <strong>
                    <?php echo e($errors->first('cpf')); ?>

                </strong>
            </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="conta">Conta</label> <br>
            <input type="number" class="form-control<?php echo e($errors->has('conta') ? ' is-invalid' : ''); ?>"
                onfocus="this.blur()" name="conta" value="<?php echo e($contaData->conta); ?>">
            <?php if($errors->has('conta')): ?>
            <span class="invalid-feedback">
                <strong>
                    <?php echo e($errors->first('conta')); ?>

                </strong>
            </span>
            <?php endif; ?>
        </div>

        <div>
            <div class="form-group">
                <label for="tipo">Tipo de Conta</label>
                <select id="inputState" class="form-control" name="tipo">
                    <option selected>Conta Corrente</option>
                    <option>Conta Poupança</option>
                    <?php if($errors->has('conta')): ?>
                    <small class="form-text text-danger"><?php echo e($errors->first('tipo')); ?></small>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="agencia">Agência</label> <br>
                <input type="number" class="form-control<?php echo e($errors->has('agencia') ? ' is-invalid' : ''); ?>" name="agencia"
                    value="<?php echo e($contaData->agencia); ?>">
                <?php if($errors->has('agencia')): ?>
                <span class="invalid-feedback">
                    <strong>
                        <?php echo e($errors->first('agencia')); ?>

                    </strong>
                </span>
                <?php endif; ?>
            </div>

        </div>
        <button type="submit" class="btn btn-dark">Salvar</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/contas/edit.blade.php ENDPATH**/ ?>