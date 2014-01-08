$(document).ready(function()
{	
	$('.test-button').click(function()
	{
		if (!$('.test-button').hasClass('finished'))
		{	
			// Sets us back to the original state of the page for testing
			request = $.ajax(
			{
				url: 'table.php',
				type: 'POST',
				data: { baseid : "0" },
				dataType: 'json',
				success: function(data)
				{
					// Populate the table
					populateTable(data);
				},
				error: function()
				{
					console.log('Data failed to load.');
					$('.test-results').append('<div class="error">Table error.</div>');
				}
			});
			
			// Get the number of entries for testing
			// This will load every entry, if there is an error it will be added to JSON object
			paging = $.ajax(
			{
				url: 'addresses.php',
				type: 'GET',
				success: function(data)
				{
					// Resets the state of the detail values for testing
					$('.detail-value').remove();
					
					// Iterates through the entries
					// If there is an error it will be recorded on the populateDetail callback
					for (var i = 0; i < data; i++)
					{
						populateDetail(i);
					}
				},
				error: function()
				{
					console.log('Data failed to load.');
					$('.test-results').append('<div class="error">Paging error.</div>');
				}
			});
			
			// If there are no errors, say so
			if ($('.test-results').children().length == 0)
			{
				$('.test-results').append('<div class="no-error">There were no errors.</div>');
			}
			
			// Add the finished styles to the test-button
			$(this).addClass('finished');
		}		
	});
});