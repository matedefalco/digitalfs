<?php $__env->startSection('title', 'Agrega película'); ?>
<?php $__env->startSection('h1', "Agregar nueva película"); ?>

<?php $__env->startSection('content'); ?>

<h1>Agregar película</h1>
<ul>
  <?php $__empty_1 = true; $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li> <?php echo e($error); ?> </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

  <?php endif; ?>
</ul>

<form class="" action="/addmovie" method="post" enctype="multipart/form-data">
  
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">título</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="titulo" value=" ">
    <small id="emailHelp" class="form-text text-muted"><?php echo e($errors->first('titulo')); ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">rating</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="rating" value="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">premios</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="awards" value="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">fecha de estreno</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="release_date">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Duracion</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="length">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Genero</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="genre">

    <?php if ($errors->has('genre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('genre'); ?>
      <small id="emailHelp" class="form-text text-muted"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

  </div>
  <div class="form-group">
      <label for="">imagen de película</label>
      <input type="file" name="image" value="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ubuntuNoFunciona/0819CBFSPCM11ARMO/laravel-clase/resources/views/addmovie.blade.php ENDPATH**/ ?>