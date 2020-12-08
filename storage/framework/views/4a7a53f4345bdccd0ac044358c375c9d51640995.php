<?php $__env->startSection('content'); ?>
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="<?php echo e(route('rentals/update', ['id' => $rentals->id])); ?>" method="post" novalidate>
                    <?php echo csrf_field(); ?> 
                    <div class="form-group">
                        <label>Fecha inicio</label>
                        <input type="date" name="start_date" class="form-control" required value="<?php echo e($rentals->start_date); ?>">
                    </div>
                    <div class="form-group">
                        <label>Fecha fin</label>
                        <input type="text" name="end_date" class="form-control" required value="<?php echo e($rentals->end_date); ?>">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="text" name="total" class="form-control" required value="<?php echo e($rentals->total); ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Envíar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Paula\ExampleCRUD\resources\views/rentals/update.blade.php ENDPATH**/ ?>