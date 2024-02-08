


<?php $__env->startSection('content'); ?>

    


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td><?php echo e($personnage->nom); ?></td>
        </tr>

        <tr>

            <th>Company:</th>
            <td><?php echo e($personnage->company); ?></td>

        </tr>

        <tr>

            <th>détail:</th>
            <td><?php echo e($personnage->detail); ?></td>

        </tr>

        <tr>

            <th>Fortune:</th>
            <td>$ <?php echo e($personnage->fortune); ?></td>

        </tr>

    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel9-crud\resources\views/personnage/show.blade.php ENDPATH**/ ?>