<?php $__env->startSection('title'); ?>
  Editar
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
  <h1>Editar actor</h1>
  <form class="edit" action="/actor/<?php echo e($actor->id); ?>/edit" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="first_name">Nombre</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo e($actor->first_name); ?>">
      
    </div>
    <div class="form-group">
      <label for="last_name">Apellido</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo e($actor->last_name); ?>">
      
    </div>
    <div class="form-group">
      <label for="raitng">Rating</label>
      <input type="text" class="form-control" id="rating" name="rating" value="<?php echo e($actor->rating); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ubuntuNoFunciona/0819CBFSPCM11ARMO/laravel-clase/resources/views/actoredit.blade.php ENDPATH**/ ?>