
/* jQuery AJAX to get shorten URL */

function url_shorten()
{
	var url = $('#url').val();
	if(url != '')
	{
		var formData = { url: url };
		$.post('/create-short-url', formData, function (data) 
		{
			if(data != 'false')
			{
				$("#short_url").empty().append("<h2>Shorten URL : </h2><a href='/"+ data +"'>" + data + "</a>");
			}
			else
			{
				$("#short_url").empty().append('');
			}
		});
	}
}