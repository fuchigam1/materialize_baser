<?php
/**
 * フィード表示
 * 呼出箇所：フィード読込Javascript
 *
 * フィード読込JavascriptよりAjaxとして呼び出される
 */
$this->Feed->saveCachetime();
?>
<!--nocache-->
	<?php $this->Feed->cacheHeader() ?>
<!--/nocache-->

<?php if (!empty($items)): ?>
<div class="row">
	<?php foreach ($items as $key => $item): ?>
	<div class="col s12 m12">
	  <div class="card small">
		<div class="card-image">
		  <span class="card-title"><a href="<?php echo $item['link']['value']; ?>"><?php echo $item['title']['value']; ?></a></span>
		</div>
		<div class="card-action">
			<span><?php echo date("Y.m.d", strtotime($item['pubDate']['value'])); ?></span>
			&nbsp;&nbsp;
			<a href="<?php echo $item['link']['value']; ?>">≫ 詳細はこちら</a>
		</div>
	  </div>
	</div>
	<?php endforeach; ?>
</div>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
