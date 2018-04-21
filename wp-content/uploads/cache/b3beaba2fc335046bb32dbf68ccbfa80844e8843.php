<?php $__env->startSection('content'); ?>

  <?php ( query_posts( 'category_name=articles&posts_per_page=3')); ?>

  <header class="section-header">
    <h1>articles</h1>
    <a href="/category/articles">See all</a>
  </header>

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

  <?php ( query_posts( 'category_name=portfolio&posts_per_page=3')); ?>

  <header class="section-header">
    <h1>portfolio</h1>
    <a href="/category/portfolio">See all</a>
  </header>

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