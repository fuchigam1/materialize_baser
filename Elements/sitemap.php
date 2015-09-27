<?php
/**
 * サイトマップ
 *
 * BcBaserHelper::sitemap() で呼び出す
 * （例）<?php $this->BcBaser->sitemap() ?>
 */
if (!isset($recursive)) {
	$recursive = 1;
}
$prefix = '';
if (Configure::read('BcRequest.agent')) {
	$prefix = '/' . Configure::read('BcRequest.agentAlias');
}
?>
<ul class="sitemap ul-level-<?php echo $recursive ?>">
	<?php if (isset($pageList['pages'])): ?>
		<?php foreach ($pageList['pages'] as $page): ?>
			<?php if ($page['Page']['title']): ?>
				<li class="sitemap-category li-level-<?php echo $recursive ?>"><?php $this->BcBaser->link($page['Page']['title'], $prefix . $page['Page']['url']) ?></li>
			<?php endif ?>
		<?php endforeach; ?>
	<?php endif ?>
	<?php if (isset($pageList['pageCategories'])): ?>
		<?php foreach ($pageList['pageCategories'] as $pageCategories): ?>
			<li class="sitemap-page li-level-<?php echo $recursive ?>">
				<?php if (!empty($pageCategories['PageCategory']['url'])): ?>
					<?php $this->BcBaser->link($pageCategories['PageCategory']['title'], $prefix . $pageCategories['PageCategory']['url']) ?>
				<?php else: ?>
					<?php if (isset($pageCategories['children'])): ?>
						<?php echo $pageCategories['PageCategory']['title'] ?>
					<?php endif ?>
				<?php endif ?>
				<?php if (isset($pageCategories['children'])): ?>
					<!-- /Elements/sitemap.php -->
					<?php $this->BcBaser->element('sitemap', array('pageList' => $pageCategories['children'], 'recursive' => $recursive + 1)) ?>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	<?php endif ?>
</ul>
