function search_toggle() {
	$('#search-toggle').toggle();
//	$('#search-form').toggle();
	
	$('#search-form').css('width', '45px');
	$('#search-form').toggle();
	$('#search-form').animate({
		width: '300px'
	});
}

$(function() {
	$('#search-toggle').click(function() {
		search_toggle();
		$('#search-input').focus();
	});
	
	$('#search:not(.active) #search-input').blur(function() {
		search_toggle();
	});
	
	$('#search.active #search-toggle').remove();
});