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
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>

<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php $this->BcBaser->css(array(
	'materialize',
	'style',
	'adjustment',
	'admin/colorbox/colorbox'
), array('media' => 'screen,projection')) ?>

<?php $this->BcBaser->js(array(
	'jquery-2.1.4.min.js',
	'materialize',
	'admin/jquery.colorbox-min-1.4.5',
	'init',
)); ?>

<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->googleAnalytics() ?>
</head>
<body id="<?php $this->BcBaser->contentsName() ?>">
<?php $this->BcBaser->header() ?>

<?php $this->BcBaser->flash() ?>
<?php if ($this->BcBaser->isHome()): ?>
	<?php $this->BcBaser->element('home') ?>
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