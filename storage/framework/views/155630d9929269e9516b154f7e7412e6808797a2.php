<?php $__env->startSection('content'); ?>
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="<?php echo e(route('type_statuses/show')); ?>" method="post" novalidate class="form-inline">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" namme="name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <a href="<?php echo e(route('type_statuses.index')); ?>" class="btn btn-primary">Todo</a>
                        <a href="<?php echo e(route('type_statuses.create')); ?>" class="btn btn-primary">Crear</a>
                    </div>
                </form>
            </article>

            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $type_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_statuses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($type_statuses->name); ?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="<?php echo e(route('type_statuses.edit',['id' => $type_statuses->id])); ?>">Editar</a>
                                <a class="btn btn-danger btn-xs" href="<?php echo e(route('type_statuses/destroy',['id' => $type_statuses->id])); ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </article>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paula\ExampleCRUD\resources\views/type_statuses/list.blade.php ENDPATH**/ ?>