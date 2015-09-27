<?php
/**
 * サイト内検索結果
 * 呼出箇所：サイト内検索結果ページ
 */
?>
<h2 class="header"><?php $this->BcBaser->contentsTitle() ?></h2>

<div class="row">
	<?php if (!empty($this->Paginator)): ?>
	<div class="col s12 m6 l6 search-result">
		<p><?php echo $this->Paginator->counter(
				array('format' => '<strong>' . implode(' ', $query) . '</strong> で検索した結果 <strong>%start%〜%end%</strong>件目 / %count% 件')
			) ?>
		</p>
	</div>
	<?php endif ?>
	<div class="col s12 m6 l6 align-right list-num">
		<?php $this->BcBaser->element('list_num') ?>
	</div>
</div>

<div id="SearchResultList" class="row">
<?php if ($datas): ?>
<div class="row">
	<?php foreach ($datas as $data): ?>
        <div class="col s12 m6">
          <div class="card teal lighten-4">
            <div class="card-content white-text">
              <span class="card-title"><?php $this->BcBaser->link($this->BcBaser->mark($query, $data['Content']['title']), $data['Content']['url']) ?></span>
              <p><?php echo $this->BcBaser->mark($query, $this->Text->truncate($data['Content']['detail'], 40)) ?></p>
            </div>
            <div class="card-action">
				<?php $this->BcBaser->link('≫ 詳細はこちら', $data['Content']['url']) ?>
				<?php //$this->BcBaser->link(fullUrl($data['Content']['url']), $data['Content']['url']) ?>
            </div>
          </div>
        </div>
	<?php endforeach ?>
</div>
<?php else: ?>
	<p class="no-data">該当する結果が存在しませんでした。</p>
<?php endif ?>
</div>


<?php $this->BcBaser->pagination('simple') ?>
