


<?php $__env->startSection('content'); ?>


    <h1>Modifier Personnage</h1>


    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </div>

    <?php endif; ?>

    <form method="post" action="<?php echo e(url('personnage/'. $personnage->id)); ?>" >
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>


        <div class="form-group mb-3">

            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="<?php echo e($personnage->nom); ?>">

        </div>

        <div class="form-group mb-3">

            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Entrer Company" name="company" value="<?php echo e($personnage->company); ?>">

        </div>

        <div class="form-group mb-3">

            <label for="fortune">Fortune ($):</label>
            <input type="number" class="form-control" id="fortune" placeholder="fortune" name="fortune" value="<?php echo e($personnage->fortune); ?>">

        </div>

        <div class="form-group mb-3">

            <label for="detail">Détail:</label>
            <textarea class="form-control" id="detail" name="detail" rows="10" placeholder="Détail"><?php echo e($personnage->detail); ?></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel9-crud\resources\views/personnage/edit.blade.php ENDPATH**/ ?>