<?php
/**
 * Layout
 * 
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<?php $this->BcBaser->title() ?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php $this->BcBaser->css(array(
	'materialize',
	'style',
	'admin/colorbox/colorbox'
), array('media' => 'screen,projection')) ?>

<?php $this->BcBaser->js(array('jquery-2.1.4.min.js')); ?>
<?php $this->BcBaser->js(array('materialize')); ?>
<?php $this->BcBaser->js(array('init')); ?>

<?php $this->BcBaser->js(array(
	'jquery.bxslider-4.12.min',
	'admin/jquery.colorbox-min-1.4.5',
)); ?>

<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->googleAnalytics() ?>
</head>
<body id="<?php $this->BcBaser->contentsName() ?>">
<?php $this->BcBaser->header() ?>

<?php $this->BcBaser->flash() ?>
<?php if ($this->BcBaser->isHome()): ?>
	<?php //$this->BcBaser->mainImage(array('all' => true, 'num' => 5, 'width' => "100%")) ?>
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
				<div class="row center">
					<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
				</div>
				<div class="row center">
					<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
				</div>
				<br><br>
			</div>
		</div>
		<div class="parallax">
			<?php echo $this->BcBaser->getImg('background1.jpg', array('alt' => 'Unsplashed background img 1')) ?>
		</div>
	</div>


	<div class="container">
		<?php $this->BcBaser->content() ?>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
				  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
				</div>
			</div>
		</div>
		<div class="parallax">
			<?php echo $this->BcBaser->getImg('background2.jpg', array('alt' => 'Unsplashed background img 2')) ?>
		</div>
	</div>


	<div class="container">
		<div class="section"><!--   Icon Section   -->
			<div class="row">
				<div class="col s12 m6">
					<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
					<h5 class="center">Speeds up development</h5>
					<?php $this->BcBaser->blogPosts('news', 3) ?>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">group</i></h2>
					<h5 class="center">User Experience Focused</h5>
					<?php $this->BcBaser->js('/feed/ajax/1') ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="section">
			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>Contact Us</h4>
					<p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
				</div>
			</div>
		</div>
	</div>


	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
				</div>
			</div>
		</div>
		<div class="parallax">
			<?php echo $this->BcBaser->getImg('background3.jpg', array('alt' => 'Unsplashed background img 3')) ?>
		</div>
	</div>
<?php else: ?>
	<?php $this->BcBaser->crumbsList(); ?>
	<div class="container">
		<div class="row">
			<div class="col s12 m8 l9">
				<?php if ($this->BcBaser->isPage()): ?>
				<h2><?php echo $this->BcBaser->getContentsTitle() ?></h2>
				<?php endif ?>

				<?php $this->BcBaser->content() ?>
				<!-- Teal page content

					  This content will be:
				  9-columns-wide on large screens,
				  8-columns-wide on medium screens,
				  12-columns-wide on small screens  -->
			</div>
			<div class="col s12 m4 l3">
			<?php $this->BcBaser->widgetArea() ?>
			<!-- Grey navigation panel

				  This content will be:
			  3-columns-wide on large screens,
			  4-columns-wide on medium screens,
			  12-columns-wide on small screens  -->
			</div>
		</div>
	</div>
	<?php $this->BcBaser->contentsNavi() ?>
<?php endif ?>


<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
</body>
</html>