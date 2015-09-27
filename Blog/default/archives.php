<?php
/**
 * ブログアーカイブ一覧
 * 呼出箇所：カテゴリ別ブログ記事一覧、タグ別ブログ記事一覧、年別ブログ記事一覧、月別ブログ記事一覧、日別ブログ記事一覧
 */
$this->BcBaser->setDescription($this->Blog->getTitle() . '｜' . $this->BcBaser->getContentsTitle() . 'のアーカイブ一覧です。');
//$this->Blog->title()
?>
<h2 class="header"><?php echo $this->Blog->getTitle() ?></h2>

<h3 class="header"><?php echo $this->BcBaser->getContentsTitle() ?></h3>

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
