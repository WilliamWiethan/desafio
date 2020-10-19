<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h2>Contas do associado <?php echo e($associado[0]['nome']); ?></h2>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">cpf</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Agência</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <?php if(count($associado[0]['contas']) == 0): ?>
            <tr>
                <td colspan="6" style="padding: 6px;">
                    Não foram encontradas contas.
                </td>
            </tr>
            <?php endif; ?>

            <?php $__currentLoopData = $associado[0]['contas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$conta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($key); ?></td>
                <td><?php echo e($associado[0]['cpf']); ?></td>
                <td><?php echo e($conta['conta']); ?></td>
                <td><?php echo e($conta['tipo']); ?></td>
                <td><?php echo e($conta['agencia']); ?></td>
                <td class="btn-group" role="group">
                    <div class="row">
                        <div class="col"><a href="<?php echo e(route('contas.edit', ['associado_id' => $associado[0]['id'],'conta' => $conta['conta']])); ?>">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill text-secondary"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col">
                            <a href="<?php echo e(route('contas.delete', ['associado_id' => $associado[0]['id'], 'conta' => $conta['conta']])); ?>">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill text-danger"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                </svg>
                            </a>
                        </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-dark" href="<?php echo e(route('contas.new', ['associado_id' => $associado[0]['id']])); ?>"
                type="button">Novo</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/william/3AD45F4F71A27D395/cursos/laravel/desafio-sicred/resources/views/associados/contasAssociado.blade.php ENDPATH**/ ?>