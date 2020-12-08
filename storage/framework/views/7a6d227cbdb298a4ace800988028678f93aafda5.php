<?php $__env->startSection('content'); ?>
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="<?php echo e(route('users/update', ['id' => $users->id])); ?>" method="post" novalidate>
                    <?php echo csrf_field(); ?> 
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="<?php echo e($users->name); ?>">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" required value="<?php echo e($users->email); ?>">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="password" class="form-control" required value="<?php echo e($users->password); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Envíar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paula\ExampleCRUD\resources\views/users/update.blade.php ENDPATH**/ ?>