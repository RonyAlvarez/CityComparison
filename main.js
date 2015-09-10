/***********************************  
FIRST SEARCH BOX
************************************/

$('form.ajax').on('submit', function() {
	var that = $(this),
		url = that.attr('action'),
		type = that.attr('method'),
		data = {};

		that.find('[name]').each(function(index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();

				data[name] = value;

		});

		//console.log(data);

		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {
				//console.log(response);

				//var getter = JSON.parse(response);
				//console.log(typeof getter);

				$('form.ajax').hide(700, function() {
					$(this).html(response).fadeIn(000, function() {
						$(this).html(response).css({
						//"border": "3px solid red",
						"text-align": "left",
						"text-decoration": "none",
						"font-size":"1.3em",
						"font-family":"AndaleMono, monospace",
						"font-weight": "lighter"
						});
					});
				});

				/* works like a charm
				$('form.ajax').hide(1000, ).fadeIn(500, function() {
					$('form.ajax').html(response);
				});

				/*
				$('form.ajax').html(response);

				$(document).ajaxComplete(function() {
					$('form.ajax').css({
						//"border": "3px solid red",
						"text-align": "left",
						"text-decoration": "none",
						"font-size":"1.3em",
						"font-family":"AndaleMono, monospace",
						"font-weight": "lighter"
						});
				}); */
			}
		}).fail(function(jqXHR) {
			alert(jqXHR.statusText);
		});

	return false;
});





/***********************************  
SECOND SEARCH BOX
************************************/

$('form.ajax2').on('submit', function() {
	var that = $(this),
		url = that.attr('action'),
		type = that.attr('method'),
		data = {};

		that.find('[name]').each(function(index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();

				data[name] = value;

		});

		//console.log(data);

		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function(response) {
				//console.log(response);

				//var getter = JSON.parse(response);
				//console.log(typeof getter);

				$('form.ajax2').hide(700, function() {
					$(this).html(response).fadeIn(000, function() {
						$(this).html(response).css({
						//"border": "3px solid red",
						"text-align": "left",
						"text-decoration": "none",
						"font-size":"1.3em",
						"font-family":"AndaleMono, monospace",
						"font-weight": "lighter"
						});
					});
				});
			}
		}).fail(function(jqXHR) {
			alert(jqXHR.statusText);
		});

	return false;
});