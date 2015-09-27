<?php
/**
 * グローバルメニュー
 *
 * BcBaserHelper::globalMenu() で呼び出す
 * （例）<?php $this->BcBaser->globalMenu() ?>
 */
if (Configure::read('BcRequest.isMaintenance')) {
	return;
}
$prefix = '';
if (Configure::read('BcRequest.agent')) {
	$prefix = '/' . Configure::read('BcRequest.agentAlias');
}
?>
<?php if (empty($menuType)) $menuType = '' ?>
<?php $globalMenus = $this->BcBaser->getMenus() ?>
<?php if (!empty($globalMenus)): ?>
<ul class="right hide-on-med-and-down">
	<?php foreach ($globalMenus as $key => $globalMenu): ?>
		<?php if ($globalMenu['Menu']['status']): ?>
			<?php
			$no = sprintf('%02d', $key + 1);
			$classies = array('menu' . $no);
			if ($this->BcArray->first($globalMenus, $key)) {
				$classies[] = 'first';
			} elseif ($this->BcArray->last($globalMenus, $key)) {
				$classies[] = 'last';
			}
			if ($this->BcBaser->isCurrentUrl($globalMenu['Menu']['link'])) {
				$classies[] = 'current';
			}
			$class = ' class="' . implode(' ', $classies) . '"';
			?>

			<?php if (!Configure::read('BcRequest.agent') && $this->base == '/index.php' && $globalMenu['Menu']['link'] == '/'): ?>
				<?php /* PC版トップページ */ ?>
				<li<?php echo $class ?>>
					<?php echo str_replace('/index.php', '', $this->BcBaser->link($globalMenu['Menu']['name'], $globalMenu['Menu']['link'])) ?>
				</li>
			<?php else: ?>
				<li<?php echo $class ?>>
					<?php $this->BcBaser->link($globalMenu['Menu']['name'], $prefix . $globalMenu['Menu']['link']) ?>
				</li>
			<?php endif ?>
		<?php endif ?>
	<?php endforeach ?>
</ul>
<ul id="nav-mobile" class="side-nav">
	<li><a href="#">Navbar Link</a></li>
</ul>
<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
<?php endif ?>
