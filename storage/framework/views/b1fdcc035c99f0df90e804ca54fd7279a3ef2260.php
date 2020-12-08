<?php $__env->startSection('content'); ?>
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="<?php echo e(route('statuses.store')); ?>" method="post" novalidate>
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paula\ExampleCRUD\resources\views/statuses/new.blade.php ENDPATH**/ ?>