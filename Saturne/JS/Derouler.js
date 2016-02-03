$(document).ready(function()
{	
	$('#paragraphe li').click(function()
	{
		var text = $(this).children('p');
		if(text.is(':hidden'))
		{
			text.slideDown('500');
			$(this).children('span').html('cliquez pour masquer'); // changer le contenu d'une balise
		}
		else
		{
			text.slideUp('300');
			$(this).children('span').html('cliquez pour d&eacute;rouler');
		}
	});
});