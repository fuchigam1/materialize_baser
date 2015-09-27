<?php
/**
 * メールフォーム
 * 呼出箇所：メールフォーム
 */
$this->BcBaser->css(array('mail'), array('inline' => false));
$this->BcBaser->js(array('admin/jquery-ui-1.8.19.custom.min', 'admin/i18n/ui.datepicker-ja'), false);
?>
<h2 class="header"><?php $this->BcBaser->contentsTitle() ?></h2>

<h3 class="header">入力フォーム</h3>
<?php if ($this->Mail->descriptionExists()): ?>
	<div class="mail-description"><?php $this->Mail->description() ?></div>
<?php endif ?>

<div class="section">
	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->element('mail_form') ?>
</div>
