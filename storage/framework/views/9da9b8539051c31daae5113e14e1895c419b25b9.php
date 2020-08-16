<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="<?php echo e(URL::route('empleados.destroy',['empleado' => $empleado->id])); ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">Eliminar Empleado</div>
                        <div class="panel-body">
                            <p>¿Seguro desea eliminar permanentemente el Empleado: <del><?php echo e($empleado->email); ?></del> ?</p>
                            <input type="hidden" name="_method" value="DELETE" />
                            <?php echo csrf_field(); ?>

                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(URL::route('empleados')); ?>" role="button">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>