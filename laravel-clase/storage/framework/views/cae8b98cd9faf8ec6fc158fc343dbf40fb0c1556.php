<?php $__env->startSection('title'); ?>
  Actores
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
      <h1>Listado de actores</h1>
      <ul>
        <?php $__empty_1 = true; $__currentLoopData = $actores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          
          <a href="/actor/<?php echo e($actor->id); ?>"><li><?php echo e($actor->nombreCompleto()); ?></li></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p>La lista no tiene actores en este momento.</p>
        <?php endif; ?>

      </ul>

      <a href="/peliculas"> Ver peliculas </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mateodh/Documents/htdocs/php/digitalfs/laravel-clase/resources/views/actores.blade.php ENDPATH**/ ?>