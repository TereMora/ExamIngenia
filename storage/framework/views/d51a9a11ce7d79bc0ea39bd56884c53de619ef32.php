<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Empleados <a role="button" href="<?php echo e(URL::route('empleados.create')); ?>" class="btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Registrar Empleado</a></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td><strong>Nombre</strong></td>
                                        <td><strong>Apellidos</strong></td>
                                        <td><strong>Email</strong></td>
                                        <td><strong>Acciones</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($empleado->nombre); ?></td>
                                        <td><?php echo e($empleado->apellidos); ?></td>
                                        <td><?php echo e($empleado->email); ?></td>
                                        <td><?php echo e($empleado->created_at->diffForHumans()); ?></td>
                                        <td>
                                            <a role="button" href="<?php echo e(URL::route('empleados.delete',['empleado' => $empleado->id])); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                                            <a role="button" href="<?php echo e(URL::route('empleados.edit',['empleado' => $empleado->id])); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $empleados->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>