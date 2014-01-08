$(document).ready(function()
{
	// Get the data for the initial table
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
	
	// Set up the paging functionality
	paging = $.ajax(
	{
		url: 'addresses.php',
		type: 'GET',
		success: function(data)
		{
			populatePaging(data);
		},
		error: function()
		{
			console.log('Data failed to load.');
			$('.test-results').append('<div class="error">Paging error.</div>');
		}
	});
});

function populateTable(data)
{
	// Clear the table before we populate it
	$('.upper-content-row').remove();
	
	for (var i = 0; i < data.length; i++)
	{
		// Account for making rows even or odd styled
		var evenRow = 'even';
		
		if (i % 2 != 0)
		{
			evenRow = 'odd';
		}
		
		// Create the HTML data
		var row = 
			"<div class='upper-content-row " + evenRow + "' id='" + (data[i].id - 1) + "'>" +
			"<div class='entry fname'>" + data[i].fname + "</div>" +
			"<div class='entry lname'>" + data[i].lname + "</div>" +
			"<div class='entry address'>" + data[i].street + "</div>" +
			"<div class='entry city'>" + data[i].city + "</div>" +
			"<div class='entry state'>" + data[i].state + "</div>" +
			"<div class='entry zip'>" + data[i].zipcode + "</div>"
			"</div>";
			
		// Append the HTML data to the document
		$('.upper-wrapper').append(row);
	}
	
	// Populate the detail on click
	$('.upper-content-row').click(function()
	{
		// Populate the details
		populateDetail($(this).attr('id'));
		
		// Unselect the other rows
		$('.selected').removeClass('selected');
		
		// Highlight the row
		$(this).addClass('selected');
	});
}

function populateDetail(id)
{
	// AJAX call to populate the detail DIV
	request = $.ajax(
	{
		url: 'detail.php',
		type: 'POST',
		data: { id : id },
		dataType: 'json',
		success: function(data)
		{
			// Window dressing
			if ($('.lower-wrapper:hidden'))
			{
				$('.lower-wrapper').slideDown('700');
			}
		
			// Empty the contents of the wrapper
			$('.detail-value-wrapper').empty();

			// Build the details block
			var details = 
				"<div class='detail-value'>" + data[0].fname + "</div>" +
				"<div class='detail-value'>" + data[0].lname + "</div>" +
				"<div class='detail-value'>" + data[0].street + "</div>" +
				"<div class='detail-value'>" + data[0].city + "</div>" +
				"<div class='detail-value'>" + data[0].state + "</div>" +
				"<div class='detail-value'>" + data[0].zipcode + "</div>" +
				"<div class='detail-value note'>" + data[0].note + "</div>";
				
			// Append the details block to the page
			$('.detail-value-wrapper').append(details);
		},
		error: function()
		{
			console.log('Data failed to load.');
			$('.test-results').append('<div class="error">Detail error.</div>');
		}
	});
}

function populatePaging(numEntries)
{
	// For every five entries, create a page
	for (var i = 0; i < numEntries % 5; i++)
	{
		var page = "<div class='page'>" + (i + 1) + "</div>";
		$('.paging-div').prepend(page);
	}
	
	// Bind the click function to the entries
	$('.page').click(function()
	{
		// Determine which page we need to load
		var id = ($(this).text() - 1) * 5;
		
		request = $.ajax(
		{
			url: 'table.php',
			type: 'POST',
			data: { baseid : id },
			dataType: 'json',
			success: function(data)
			{
				// Populate the table
				populateTable(data);
			},
			error: function()
			{
				console.log('Data failed to load.');
				$('.test-results').append('<div class="error">Paging error.</div>');
			}
		});		
	});
}











