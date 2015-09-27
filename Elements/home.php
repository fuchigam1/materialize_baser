<?php
/**
 * Home
 *
 */
?>
<?php //$this->BcBaser->mainImage(array('all' => true, 'num' => 5, 'width' => "100%")) ?>
<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<br><br>
			<h1 class="header center teal-text text-lighten-2">Materialize Theme</h1>
			<div class="row center">
				<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
			</div>
			<div class="row center">
				<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
			</div>
			<br><br>
		</div>
	</div>
	<div class="parallax">
		<?php echo $this->BcBaser->getImg('background1.jpg', array('alt' => 'Unsplashed background img 1')) ?>
	</div>
</div>


<div class="container">
	<?php $this->BcBaser->content() ?>
</div>


<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
			  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
	<div class="parallax">
		<?php echo $this->BcBaser->getImg('background2.jpg', array('alt' => 'Unsplashed background img 2')) ?>
	</div>
</div>


<div class="container">
	<div class="section"><!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m6">
				<div class="icon-block">
				<h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
				<h5 class="center">新着情報</h5>
				<?php $this->BcBaser->blogPosts('news', 3) ?>
				</div>
			</div>

			<div class="col s12 m6">
				<div class="icon-block">
				<h2 class="center brown-text"><i class="material-icons">group</i></h2>
				<h5 class="center">baserCMSサイトのお知らせ</h5>
				<?php $this->BcBaser->js('/feed/ajax/1') ?>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="section">
		<div class="row">
			<div class="col s12 center">
				<h3><i class="mdi-content-send brown-text"></i></h3>
				<h4>お問合せはこちら</h4>
				<p class="left-align light">
					お問合せについての説明文。お問合せについての説明文。お問合せについての説明文。お問合せについての説明文。お問合せについての説明文。お問合せについての説明文。お問合せについての説明文。お問合せについての説明文。
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 l6">
				<div class="card-panel grey lighten-5 z-depth-1">
				  <div class="row valign-wrapper">
					<div class="col s2">
						<?php echo $this->BcBaser->getImg('logo_only.png', array('class' => 'circle responsive-img')) ?>
					</div>
					<div class="col s10">
					  <span class="black-text">
						  四角い画像にも、class に circle を指定することで丸く見せることができます。
					  </span>
					</div>
				  </div>
				</div>
			</div>
			<div class="col s12 m6 l6 align-center">
				<br>
				<a href="/contact/" class="waves-effect waves-light btn-large"><i class="material-icons right">contact_phone</i>button</a>
				<a href="/contact/" class="waves-effect waves-light btn-large"><i class="material-icons right">comment</i>button</a>
				<p>※<?php $this->BcBaser->link('表示アイコン', '/icons') ?>はいろいろあります。</p>
			</div>
		</div>
	</div>
</div>


<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
	<div class="parallax">
		<?php echo $this->BcBaser->getImg('background3.jpg', array('alt' => 'Unsplashed background img 3')) ?>
	</div>
</div>
