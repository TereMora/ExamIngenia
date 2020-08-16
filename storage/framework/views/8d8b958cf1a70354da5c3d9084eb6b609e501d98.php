<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Domicilios <a role="button" href="<?php echo e(URL::route('domicilios.create')); ?>" class="btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar Domicilio</a></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td><strong>Empleado</strong></td>
                                        <td><strong>Calle</strong></td>
                                        <td><strong>Colonia</strong></td>
                                        <td><strong>CP</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $domicilios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $domicilio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($domicilio->empleado->nombre); ?></td>
                                        <td><?php echo e($domicilio->calle); ?></td>
                                        <td><?php echo e($domicilio->colonia); ?></td>
                                        <td><?php echo e($domicilio->cp); ?></td>
                                        <td><?php echo e($domicilio->created_at->diffForHumans()); ?></td>
                                        <td>
                                            <a role="button" href="<?php echo e(URL::route('domicilios.delete',['domicilio' => $domicilio->id])); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                                            <a role="button" href="<?php echo e(URL::route('domicilios.edit',['domicilio' => $domicilio->id])); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $domicilios->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>