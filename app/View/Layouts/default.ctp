<!DOCTYPE html>
<html lang="fr">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>

	<!-- L'icone -->
	<?php echo $this->Html->meta('icon'); ?>
	
	<!-- Les CSS -->
	<?php echo $this->Html->css(array('jquery-ui', 'bootstrap')); ?>
</head>
<body>
		<header>
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">Test</a>
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Lien 1</a></li>
						<li><a href="#">Lien 2</a></li>
					</ul>
				</div>
			</div>
		</header>

		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>

		</footer>

	<!-- Le JS -->
	<?php echo $this->Html->script(array('jquery.min','jquery-ui.min','bootstrap.min')); ?>


	<!-- Le reste qui n'est pas géré par moi mais pas debugKit	-->
</body>
</html>
