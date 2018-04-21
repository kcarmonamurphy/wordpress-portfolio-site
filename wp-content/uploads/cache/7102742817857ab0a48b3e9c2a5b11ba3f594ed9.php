<header class="container">

	<div class="logo-bar">
		<div class="initials-horizontal">
			<div class="grey-square">
				<h1>k</h1>
			</div>
			<div class="grey-square">
				<h1>c</h1>
			</div>
			<div class="grey-square">
				<h1>m</h1>
			</div>
		</div>

		<div class="hamburger-menu">
			<div class="closed"></div>
			<div class="open"></div>
		</div>
	</div>

	<div class="nav-menu">
		<?php echo $__env->make('partials.nav-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

</header>
