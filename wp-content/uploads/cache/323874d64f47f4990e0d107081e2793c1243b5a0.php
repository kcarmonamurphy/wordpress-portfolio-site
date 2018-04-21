<h3 class="description">portfolio &<br />curriculum vitae</h3>

<div class="sidebar-section">
	<input type="search" placeholder="search" />
</div>

<?php ( query_posts( 'category_name=articles&posts_per_page=3')); ?>

<div class="sidebar-section">
	<a href="/category/articles"><h3><strong>articles</strong></h3></a>
    <?php while(have_posts()): ?> <?php (the_post()); ?>
  		<a href="<?php echo e(get_permalink()); ?>"><h3><?php echo e(get_the_title()); ?></h3></a>
	<?php endwhile; ?>
</div>

<?php ( query_posts( 'category_name=portfolio&posts_per_page=3')); ?>

<div class="sidebar-section">
	<a href="/category/portfolio"><h3 ><strong>portfolio</strong></h3></a>
    <?php while(have_posts()): ?> <?php (the_post()); ?>
  		<a href="<?php echo e(get_permalink()); ?>"><h3><?php echo e(get_the_title()); ?></h3></a>
	<?php endwhile; ?>
</div>

<div class="sidebar-section">
	<a href="#"><h3><strong>cv</strong></h3></a>
	<a href="#"><h3>how to program?</h3></a>
	<a href="#"><h3>how to program?</h3></a>
</div>

<div class="sidebar-section">
	<a href="#"><h3><strong>blogs</strong></h3></a>
	<a href="#"><h3>russian blog</h3></a>
</div>

<div class="social-icons">
	<img src="<?= App\asset_path('images/icons8-facebook.png'); ?>">
	<img src="<?= App\asset_path('images/icons8-stackoverflow.png'); ?>">
	<img src="<?= App\asset_path('images/icons8-linkedin.png'); ?>">
	<img src="<?= App\asset_path('images/icons8-github.png'); ?>">
</div>