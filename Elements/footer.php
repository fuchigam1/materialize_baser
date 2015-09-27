<?php
/**
 * フッター
 *
 * BcBaserHelper::footer() で呼び出す
 * （例）<?php $this->BcBaser->footer() ?>
 */
?>
<footer class="page-footer teal">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">会社情報</h5>
				<p class="grey-text text-lighten-4">
					会社紹介文サンプルテキスト。会社紹介文サンプルテキスト。会社紹介文サンプルテキスト。会社紹介文サンプルテキスト。<br>
					会社紹介文サンプルテキスト。会社紹介文サンプルテキスト。会社紹介文サンプルテキスト。
				</p>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">コンテンツ</h5>
<?php $globalMenus = $this->BcBaser->getMenus() ?>
<?php if (!empty($globalMenus)): ?>
<ul>
	<?php foreach ($globalMenus as $key => $globalMenu): ?>
		<?php if ($globalMenu['Menu']['status']): ?>
			<?php if (!Configure::read('BcRequest.agent') && $this->base == '/index.php' && $globalMenu['Menu']['link'] == '/'): ?>
				<?php /* PC版トップページ */ ?>
				<li class="white-text">
					<?php echo str_replace('/index.php', '', $this->BcBaser->link($globalMenu['Menu']['name'], $globalMenu['Menu']['link'], array('class' => 'white-text'))) ?>
				</li>
			<?php else: ?>
				<li>
					<?php $this->BcBaser->link($globalMenu['Menu']['name'], $globalMenu['Menu']['link'], array('class' => 'white-text')) ?>
				</li>
			<?php endif ?>
		<?php endif ?>
	<?php endforeach ?>
</ul>
<?php endif ?>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">関連</h5>
				<ul>
					<li><a class="white-text" href="http://basercms.net/" target="_blank">baserCMS 公式サイト</a></li>
					<li><a class="white-text" href="http://forum.basercms.net/" target="_blank">ユーザーズフォーラム</a></li>
					<li><a class="white-text" href="http://wiki.basercms.net/" target="_blank">公式wiki</a></li>
					<li><a class="white-text" href="http://project.e-catchup.jp/projects/basercms" target="_blank">コア開発プロジェクト</a></li>
					<li><a class="white-text" href="http://www.facebook.com/basercms" target="_blank">Facebook</a></li>
					<li><a class="white-text" href="http://twitter.com/basercms" target="_blank">Twitter</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<?php $this->BcBaser->copyYear(2015) ?> Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			<a href="http://basercms.net/" target="_blank"><?php echo $this->BcHtml->image('baser.power.gif', array('alt' => 'baserCMS : Based Website Development Project', 'border' => "0")); ?></a>&nbsp;
		<a href="http://cakephp.org/" target="_blank"><?php echo $this->BcHtml->image('cake.power.gif', array('alt' => 'CakePHP(tm) : Rapid Development Framework', 'border' => "0")); ?></a>
		</div>
	</div>
</footer>
