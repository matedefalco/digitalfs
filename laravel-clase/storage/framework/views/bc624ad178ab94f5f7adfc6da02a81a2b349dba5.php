<?php $__env->startSection('title'); ?>
  Actores
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
  <h1>Agregar actor</h1>
  

  <form class="" action="/actor/add" method="post" enctype="multipart/form-data">
    
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label for="first_name">Nombre</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value=" ">
      
    </div>
    <div class="form-group">
      <label for="last_name">Apellido</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="">
      
    </div>
    <div class="form-group">
      <label for="raitng">Rating</label>
      <input type="text" class="form-control" id="rating" name="rating" value="">
      
    </div>

      

    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ubuntuNoFunciona/0819CBFSPCM11ARMO/laravel-clase/resources/views/actorsadd.blade.php ENDPATH**/ ?>