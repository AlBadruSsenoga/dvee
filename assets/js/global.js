$(function() 
{
	// Remove No JS Class
	$('html').removeClass('no-js');

	// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

	// Convert each css based drop menu into a JS drop menu.
	$('.css_nav_dropmenu').each(function(){
		// Save menu height to enable dropmenu animation
		var menu_height = $(this).find('ul').height();
		$(this).attr('data-menu-height', menu_height);
		
		// Remove fallback css hover effect on JS load
		$(this).attr('class','js_nav_dropmenu'); // Removes existing CSS class	
	});

	// Position Menus for IE6-7 Bug
	$('.js_nav_dropmenu').each(function()
	{
		var pos = $(this).position();
		$(this).find('ul').css('left',pos.left);
	});

	// Toggle Menus
	$('.js_nav_dropmenu').on({mouseover:function()
	{	
		var menu_height = $(this).attr('data-menu-height');		
		$(this).find('ul').stop().animate({'height':menu_height}, 400);
	},
	mouseleave:function()
	{
		$(this).find('ul').stop().animate({'height':'0'}, 400);
	}});
	
	// Fix uneven div heights
	$('.parallel').each(function()
	{
		var tallest_elem = 0;
		$(this).find('.parallel_target').each(function(i)
		{
			tallest_elem = ($(this).height() > tallest_elem)?$(this).height():tallest_elem;
		});
		
		$(this).find('.parallel_target').css({'min-height':tallest_elem});
	});	
	

	// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
	
	// Fade out status messages, but ensure error messages stay visable.
	if ($('.status_msg').length > 0 && $('.error_msg').length == 0)
	{
		$('#message').delay(4000).fadeTo(1000,0.01).slideUp(500);
	}

	// Tooltip helpers.
	$('.tooltip_trigger[title]').tooltip({effect:'slide', predelay:500});

	// Toggle show/hide next html tag.
	$('.toggle').on('click', function(){
		$(this).parent().find('.hide_toggle').slideToggle();
	});
	
	// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
	
	// Show hidden help in user guide.
	$('.help_link').click(function(){
		$('#help_guide').show();
	});
	
	// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //
	
	$('.validate_alpha').on('keypress', function(e){
		return validate_alpha(e);
	});
	
	$('.validate_integer').on('keypress', function(e){
		return validate_numbers($(this), e, false, false);
	});
	
	$('.validate_decimal').on('keypress', function(e){
		return validate_numbers($(this), e, true, false);
	});
});

// http://www.mredkj.com/tutorials/validate2.html
function validate_alpha(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}

// http://www.mredkj.com/tutorials/validate2.html
function validate_numbers(obj, e, allowDecimal, allowNegative)
{
	var key;
	var isCtrl = false;
	var keychar;
	var reg;
		
	if (window.event) 
	{
		key = e.keyCode;
		isCtrl = window.event.ctrlKey
	}
	else if (e.which) 
	{
		key = e.which;
		isCtrl = e.ctrlKey;
	}
	
	if (isNaN(key)) 
	{
		return true; 
	}
	
	keychar = String.fromCharCode(key);
	
	// Check for backspace or delete, or if Ctrl was pressed
	if (key == 8 || isCtrl)
	{
		return true;
	}

	reg = /\d/;
	var isFirstN = allowNegative ? keychar == '-' && obj.value.indexOf('-') == -1 : false;
	var isFirstD = allowDecimal ? keychar == '.' && obj.value.indexOf('.') == -1 : false;
	
	return isFirstN || isFirstD || reg.test(keychar);
}