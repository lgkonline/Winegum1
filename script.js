function search_toggle() {
	$('#search-form').css('width', '45px');
	$('#search-form').toggle();
	$('#search-toggle').toggleClass('active');
	$('#search-form').animate({
		width: '276px'
	});
	$('#search-input').select();
}

$(function() {
	$.stellar({
		horizontalScrolling: false
	});
	
	$('#search-toggle').click(function() {
		search_toggle();
	});
	
	$('#search:not(.active) #search-input').blur(function() {
		search_toggle();
	});
	
	$('#search.active #search-toggle').remove();
	
	$('#social-icons .btn').tooltip();
	
	$('#nav-open').click(function() {
		$('#nav-menu').toggleClass('hidden-xs hidden-sm');
		$(this).toggleClass('active');
	});
	
	$('.si > a').each(function() {
		var color = 'rgba(' + $(this).attr('data-rgb') + ', .9)';
		
		$(this).hover(
			function() {
				$(this).css('background-color', color);
			},
			function() {
				$(this).css('background-color', 'transparent');
			}
		);
	});
	
	if (! ($('#nav-menu').length) ) {
		$('#nav-open').remove();
	}
	
	$('.sidebar-widget').each(function() {
		if ($(this).find('*').hasClass('panel-body-2')) {
			$(this).find('.panel-body-1').remove();
		}
	});
	$(this).find('.panel-body-1').show();
	
	$('.widget_search .searchform').each(function() {
		$(this).find('div').append('<div class="input-group" />');
		$(this).find('div').find('#s').appendTo($(this).find('div .input-group'));
		
		$(this).find('div .input-group').append('<span class="input-group-btn" />');
		$(this).find('div').find('#searchsubmit').appendTo($(this).find('div .input-group-btn'));
		
		$(this).find('div .input-group').find('#s').addClass('form-control');
		$(this).find('div .input-group').find('#searchsubmit').addClass('btn btn-default');
	});
	
	$('#comment-form-more').hide();
	$('#comment-form').click(function() {
		$('#comment-form-more').show();
	});
});