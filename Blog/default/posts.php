<?php
/**
 * パーツ用ブログ記事一覧
 *
 * BcBaserHelper::blogPosts( コンテンツ名, 件数 ) で呼び出す
 * （例）<?php $this->BcBaser->blogPosts('news', 3) ?>
 */
?>
<?php if ($posts): ?>
<div class="row">
	<?php foreach ($posts as $key => $post): ?>
	<div class="col s12 m12">
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
<?php endif ?>
