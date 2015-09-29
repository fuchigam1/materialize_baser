<?php
/**
 * MaterializeHelper
 *
 */
class MaterializeHelper extends AppHelper
{

	/**
	 * ヘルパー
	 *
	 * @var array
	 */
	public $helpers = array('BcBaser');

	/**
	 * コンテンツの指定IDの中身を返す
	 * 
	 * @param string $contents
	 * @param string $str
	 * @return string
	 */
	public function getIdPageContents($contents = '', $str = '')
	{
		$html = '';
		if (!$str) {
			$str = 'SubmenuBoxArea';
		}
		
		// 指定された ID 内の要素を抜き出す
		$dom = new DOMDocument();
		// 文字化けを起こすための変換対策
		$contents = mb_convert_encoding($contents, 'HTML-ENTITIES', 'UTF-8');
		@$dom->loadHTML($contents);
		$element = $dom->getElementById($str);
		if($element) {
			$html = $dom->saveXML($element);
		} else {
			$html = '';
		}
		
		// 数値文字参照を変換する
		$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
		$html = mb_convert_encoding($html, 'UTF-8', 'HTML-ENTITIES');
		
		// 指定ID属性のDIVタグを削除する
		$html = preg_replace('/^<div[^>]+>/', '', $html);
		// </div>を削除する
		$html = preg_replace('/<\/div>$/', '', $html);
		$html = trim($html);
		
		return $html;
	}

}
