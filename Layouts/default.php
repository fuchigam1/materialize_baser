<?php
/**
 * Layout
 * 
 */
$contentName = $this->BcBaser->getContentsName();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<?php $this->BcBaser->title() ?>
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<?php echo $this->fetch('meta') ?>

<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php $this->BcBaser->css(array(
	'materialize',
	'style',
	'adjustment',
	'admin/colorbox/colorbox'
), array('media' => 'screen,projection')) ?>
<?php echo $this->fetch('cssTag') ?>

<?php $this->BcBaser->js(array(
	'jquery-2.1.4.min.js',
	'materialize',
	'admin/jquery.colorbox-min-1.4.5',
	'init',
)); ?>
<?php echo $this->fetch('scriptTag') ?>

<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->googleAnalytics() ?>
</head>
<body id="<?php echo $this->fetch('bodyIdName', $contentName) ?>">
<?php $this->BcBaser->header() ?>

<?php if ($this->BcBaser->isHome()): ?>
	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->element('home') ?>
<?php else: ?>
	<?php $this->BcBaser->crumbsList(); ?>
	<div class="container">
		<?php $this->BcBaser->flash() ?>
		<div class="row">
			<div class="col s12 m8 l9">
				<?php echo $this->fetch('contentsHead') ?>

				<?php $this->startIfEmpty('mainContentsName') ?>
				<?php if ($this->BcBaser->isPage() || $this->name == 'Pages'): ?>
					<?php $parentPageCategory = $this->BcPage->getParentCategory(true) ?>
					<?php if (!empty($parentPageCategory)): ?>
					<h1><?php echo $parentPageCategory['PageCategory']['title'] ?></h1>
					<h2><?php echo $this->fetch('mainContentsTitle', $this->BcBaser->getContentsTitle()) ?></h2>
					<?php else: ?>
					<h1><?php echo $this->fetch('mainContentsTitle', $this->BcBaser->getContentsTitle()) ?></h1>
					<?php endif ?>
				<?php else: ?>
					<?php // 固定ページ以外のとき ?>
				<?php endif ?>
				<?php $this->end() ?>
				<?php echo $this->fetch('mainContentsName') ?>

				<?php $this->BcBaser->content() ?>
				<!-- Teal page content

					  This content will be:
				  9-columns-wide on large screens,
				  8-columns-wide on medium screens,
				  12-columns-wide on small screens  -->
				<?php echo $this->fetch('contentsFoot') ?>
			</div>

			<div class="col s12 m4 l3">
			<?php $this->startIfEmpty('sideContents') ?>
			<?php $this->BcBaser->widgetArea() ?>
			<!-- Grey navigation panel

				  This content will be:
			  3-columns-wide on large screens,
			  4-columns-wide on medium screens,
			  12-columns-wide on small screens  -->
			<?php $this->end() ?>
			<?php echo $this->fetch('sideContents') ?>
			</div>
		</div>
	</div>
	<?php $this->BcBaser->contentsNavi() ?>
<?php endif ?>


<?php $this->BcBaser->footer() ?>
<?php $this->BcBaser->func() ?>
</body>
</html>