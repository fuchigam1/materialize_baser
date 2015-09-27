<?php
/**
 * ページネーション
 * 呼出箇所：サイト内検索結果一覧、ブログトップ、カテゴリ別ブログ記事一覧、タグ別ブログ記事一覧、年別ブログ記事一覧、月別ブログ記事一覧、日別ブログ記事一覧
 *
 * BcBaserHelper::pagination() で呼び出す
 * （例）<?php $this->BcBaser->pagination() ?>
 */
if (empty($this->Paginator)) {
	return;
}
if (!isset($modules)) {
	$modules = 5;
}
?>

<?php if ((int) $this->Paginator->counter(array('format' => '%pages%')) > 1): ?>
<ul class="pagination center-align">
	<?php echo $this->Paginator->prev('< 前へ', array('class' => '', 'tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li')) ?>
	<?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'class' => 'waves-effect number', 'modulus' => $modules)) ?>
	<?php echo $this->Paginator->next('次へ >', array('class' => '', 'tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li')) ?>
</ul>
<?php endif; ?>
