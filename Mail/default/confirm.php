<?php
/**
 * メールフォーム確認ページ
 * 呼出箇所：メールフォーム
 */
$this->BcBaser->css(array('mail'), array('inline' => false));

if ($freezed) {
	$this->Mailform->freeze();
}
?>
<h2 class="header"><?php $this->BcBaser->contentsTitle() ?></h2>

<?php if ($freezed): ?>
<div class="section">
	<h3>入力内容の確認</h3>
	<p>入力した内容に間違いがなければ「送信する」ボタンをクリックしてください。</p>
</div>
<?php else: ?>
<h3 class="header">入力フォーム</h3>
<?php endif ?>

<div class="section">
	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->element('mail_form') ?>
</div>
