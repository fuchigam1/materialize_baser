<?php
/**
 * コンテンツナビ
 * 呼出箇所：固定ページ
 *
 * BcBaserHelper::contentsNavi() で呼び出す
 * （例）<?php $this->BcBaser->contentsNavi() ?>
 */
if (!isset($this->BcPage) || !$this->BcPage->contentsNaviAvailable()) {
	return;
}
?>
<div id="ContentsNavi" class="row">
	<div class="col s12 m6 l6">
	<?php $this->BcPage->prevLink() ?>
	</div>
	<div class="col s12 m6 l6">
	<?php $this->BcPage->nextLink() ?>
	</div>
</div>
