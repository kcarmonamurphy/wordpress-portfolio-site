<?php $__env->startSection('content'); ?>

  <h1>articles</h1>

  <?php ( query_posts( 'category_name=articles&posts_per_page=3')); ?>

  <?php echo get_the_posts_navigation(); ?>


  <div class="articles">

    <?php if(!have_posts()): ?>
      <div class="alert alert-warning">
        <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

      </div>
      <?php echo get_search_form(false); ?>

    <?php endif; ?>

    <?php while(have_posts()): ?> <?php (the_post()); ?>
      <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>

  </div>

  <h1>portfolio</h1>

  <?php ( query_posts( 'category_name=portfolio&posts_per_page=3')); ?>

  <?php echo get_the_posts_navigation(); ?>


  <div class="portfolio">

    <?php if(!have_posts()): ?>
      <div class="alert alert-warning">
        <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

      </div>
      <?php echo get_search_form(false); ?>

    <?php endif; ?>

    <?php while(have_posts()): ?> <?php (the_post()); ?>
      <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>

  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>