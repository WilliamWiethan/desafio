<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <?php if(count($agencias) == 0): ?>
    <tr>
        <td colspan="6" style="padding: 6px;">
            Não foram encontrados registros.
        </td>
    </tr>
    <?php endif; ?>
    <?php $__currentLoopData = $agencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col text-center">
        <h2>Agência <?php echo e($agencia[0]->agencia); ?></h2>
    </div>
    <div class="col">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Agência</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $agencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$associado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($key); ?></td>
                <td><?php echo e($associado->nome); ?></td>
                <td><?php echo e($associado->cpf); ?></td>
                <td><?php echo e($associado->conta); ?></td>
                <td><?php echo e($associado->tipo); ?></td>
                <td><?php echo e($associado->agencia); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/agencias/associadoPorAgencia.blade.php ENDPATH**/ ?>