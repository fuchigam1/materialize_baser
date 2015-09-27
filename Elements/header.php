<?php
/**
 * ヘッダー
 *
 * BcBaserHelper::header() で呼び出す
 * （例）<?php $this->BcBaser->header() ?>
 */
?>
<nav class="white" role="navigation">
	<div class="nav-wrapper container">
		<a id="logo-container" href="<?php echo $this->BcBaser->root() ?>">
			<?php $this->BcBaser->logo(array('class' => 'brand-logo', 'link' => false)) ?>
		</a>
		<?php $this->BcBaser->globalMenu() ?>
	</div>
</nav>
