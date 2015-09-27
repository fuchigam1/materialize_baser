<?php
/**
 * ブログトップ
 * 呼出箇所：ブログトップ
 */
$this->BcBaser->setDescription($this->Blog->getDescription());
?>
<h2 class="header"><?php echo $this->Blog->getTitle() ?></h2>
<?php if ($this->Blog->descriptionExists()): ?>
<div class="blog-description card-panel teal lighten-2">
<?php echo $this->Blog->getDescription() ?>
</div>
<?php endif ?>

<?php if (!empty($posts)): ?>
<div class="row">
	<?php foreach ($posts as $post): ?>
	<div class="col s12 m4">
	  <div class="card small">
		<div class="card-image">
			<?php echo $this->Blog->getEyeCatch($post, array('link' => false)) ?>
			<span class="card-title"><?php $this->Blog->postTitle($post) ?></span>
		</div>
		<?php if ($post['BlogPost']['content']): ?>
		<div class="card-content">
		  <p><?php $this->Blog->postContent($post, false, false, 20) ?></p>
		</div>
		<?php endif ?>
		<div class="card-action">
			<span><?php $this->Blog->postDate($post, 'Y.m.d') ?></span>
			<br>
			<?php $post['BlogPost']['name'] = '≫ 詳細はこちら' ?>
			<?php $this->Blog->postTitle($post) ?>
		</div>
	  </div>
	</div>
	<?php endforeach; ?>
</div>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>

<?php $this->BcBaser->pagination('simple'); ?>
