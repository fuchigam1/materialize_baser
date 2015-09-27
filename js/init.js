(function($){
	$(function(){
		$('.button-collapse').sideNav();
		$('.parallax').parallax();

		$("a[rel='colorbox']").colorbox({transition:"fade"});

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
		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15 // Creates a dropdown of 15 years to control year
		});

		$("#MainImage").show();
		$("#MainImage").bxSlider({mode:"fade", auto:true});
	}); // end of document ready
})(jQuery); // end of jQuery name space
