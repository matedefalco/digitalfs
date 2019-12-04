<?php $__env->startSection('title'); ?>
  Actores
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
  <h1>Detalles de actor:</h1>
  <ul>
    <li> Nombre: <?php echo e($actor->first_name); ?> </li>
    <li> Apellido: <?php echo e($actor->last_name); ?> </li>
    <li> Rating: <?php echo e($actor->rating); ?> </li>
  </ul>

  <a class="btn btn-primary" href="/actor/<?php echo e($actor->id); ?>/edit">EDITAR </a>
  <a href="/actores"> Todas los actores </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mateodh/Documents/htdocs/php/digitalfs/laravel-clase/resources/views/actor.blade.php ENDPATH**/ ?>