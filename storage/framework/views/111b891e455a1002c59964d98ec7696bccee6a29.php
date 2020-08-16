<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Empleado</div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo e(URL::route('empleados.update',['empleado' => $empleado->id])); ?>">
                            <?php echo csrf_field(); ?>

                            <input type="hidden" name="_method" value="PATCH" />
                            <div class="form-group<?php echo e($errors->has('descripcion') ? ' has-error' : ''); ?>">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo e($empleado->nombre); ?>" required>
                                <?php if($errors->has('nombre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo e($empleado->email); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('fecha_nac') ? ' has-error' : ''); ?>">
                                <label for="fecha_nac">Fecha de Nacimiento</label>
                                <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Fecha de Nacimiento" value="<?php echo e($empleado->fecha_nac); ?>" required>
                                <?php if($errors->has('fecha_nac')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('fecha_nac')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <button class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>