(function($){
	$(function(){
		$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$('.slider').slider();

		/* 画像ポップアップ用 */
		$("a[rel='colorbox']").colorbox({transition:"fade"});

		/* メールフォームの input 調整用 */
		$("input[type=radio]").each(function() {
			$inputHtml = $(this);
			$(this).parent().before($inputHtml);
		});
		$("input[type=checkbox]").each(function() {
			$inputHtml = $(this);
			$(this).parent().before($inputHtml);
		});
		$("select").each(function() {
			$(this).wrap('<div class="input-field">');
		});
		$("textarea").each(function() {
			$(this).wrap('<div class="input-field">');
		});
		/* http://amsul.ca/pickadate.js/date/#formatting-rules */
		$('.datepicker').pickadate({
			format: 'yyyy-mm-dd',
			formatSubmit: 'yyyy/mm/dd',
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15 // Creates a dropdown of 15 years to control year
		});
	}); // end of document ready
})(jQuery); // end of jQuery name space
