// alert('hi');

$('.btn-margins').click(function()
{
	$('#set-customer-id-form').find('input[name="id"]').val($(this).attr('data-id'));
	$('#set-customer-id-form').submit();
}); 

$(document).ready(function()
{
	$('#set-customer-id-form').ajaxForm(function(response)
	{
		if (response == 1)
		{
			window.location = 'administration/customer-margins';
		}
	})
});