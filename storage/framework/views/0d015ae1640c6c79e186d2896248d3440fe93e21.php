<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar domicilio a Empleado</div>
                    <div class="panel-body">
                        <form method="POST" action="<?php echo e(URL::route('domicilios.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group<?php echo e($errors->has('empleado_id') ? ' has-error' : ''); ?>">
                                <label for="empleado_id">Empleado</label>
                                <select class="form-control" id="empleado_id" name="empleado_id" required>
                                    <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($empleado->id); ?>"><?php echo e($empleado->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('empleado_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('empleado_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('calle') ? ' has-error' : ''); ?>">
                                <label for="calle">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" placeholder="calle" required>
                                <?php if($errors->has('calle')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('calle')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('colonia') ? ' has-error' : ''); ?>">
                                <label for="calle">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="colonia" required>
                                <?php if($errors->has('colonia')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('colonia')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('cp') ? ' has-error' : ''); ?>">
                                <label for="calle">CP</label>
                                <input type="text" class="form-control" id="cp" name="cp" placeholder="cp" required>
                                <?php if($errors->has('cp')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cp')); ?></strong>
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