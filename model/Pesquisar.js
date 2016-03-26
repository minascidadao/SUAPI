// JavaScript Document
$(document).ready(function(e) 
{
    $('#buttonLocalizar').click(function()
	{
		var localizar = $('input[name="inputLocalizar"]').val();
		if (localizar)
		{
		alert(localizar);

		}
	});
});