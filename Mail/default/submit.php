<?php
/**
 * メールフォーム送信完了ページ
 * 呼出箇所：メールフォーム
 */
if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']) {
	$this->Html->meta(array('http-equiv' => 'Refresh'), null, array('content' => '5;url=' . $mailContent['MailContent']['redirect_url'], 'inline' => false));
}
?>
<h2 class="header"><?php $this->BcBaser->contentsTitle() ?></h2>

<h3 class="header">メール送信完了</h3>

<div class="section">
	<p>お問い合わせ頂きありがとうございました。<br>
		確認次第、ご連絡させて頂きます。</p>
<?php if (Configure::read('debug') == 0 && $mailContent['MailContent']['redirect_url']): ?>
	<p>※５秒後にトップページへ自動的に移動します。</p>
	<p><a href="<?php echo $mailContent['MailContent']['redirect_url']; ?>">移動しない場合はコチラをクリックしてください。≫</a></p>
<?php endif; ?>
</div>
