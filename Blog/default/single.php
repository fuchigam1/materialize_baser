<?php
/**
 * ブログ記事詳細ページ
 * 呼出箇所：ブログ記事詳細ページ
 */
$this->BcBaser->setDescription($this->Blog->getTitle() . '｜' . $this->Blog->getPostContent($post, false, false, 50));
?>
<h2 class="header"><?php echo $this->Blog->getTitle() ?></h2>

<h3 class="header"><?php echo $this->BcBaser->getContentsTitle() ?></h3>

<article class="post section">
	<?php $this->Blog->postContent($post) ?>
</article>

<div class="row meta">
	<div class="col s4">
		<?php $this->Blog->category($post) ?>
	</div>
	<div class="col s4">
	<?php $this->Blog->postDate($post) ?>
	</div>
	<div class="col s4">
	<?php $this->Blog->author($post) ?>
	</div>
	<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
</div>

<div id="ContentsNavi" class="row">
	<div class="col s6">
	<?php $this->Blog->prevLink($post) ?>
	</div>
	<div class="col s6 align-right">
	<?php $this->Blog->nextLink($post) ?>
	</div>
</div>

<?php $this->BcBaser->element('blog_related_posts') ?>

<?php $this->BcBaser->element('blog_comments') ?>
