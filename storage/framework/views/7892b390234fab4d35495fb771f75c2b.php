


<?php $__env->startSection('content'); ?>

    <h1>Ajouter un personnage</h1>


    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>

    <form action="<?php echo e(url('personnage')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group mb-3">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">

            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" placeholder="Company" name="company">

        </div>

        <div class="form-group mb-3">
            <label for="fortune">Fortune ($):</label>
            <input type="number" class="form-control" id="fortune" placeholder="fortune" name="fortune">
        </div>

        <div class="form-group mb-3">
            <label for="detail">Détail:</label>
            <textarea class="form-control" id="detail" name="detail" rows="10" placeholder="Détail"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel9-crud\resources\views/personnage/create.blade.php ENDPATH**/ ?>