$(function(){
	$(window).load(function(){
		var delay = 200;

		$('canvas').each(function(){
			var data = new Array();
			var reference = new Array('46bcec', '7ed0f2', 'ced1d6', 'a8a29f', '474e5e', '2c3344');
			var dl = $(this).parent().next().find('dl dd');
			var count = $(dl).length;
			var c = 0;

			if (count == 2) {
				var colors = new Array(reference[0], reference[5]);
			} else if (count == 3) {
				var colors = new Array(reference[0], reference[2], reference[5]);
			} else if (count == 4) {
				var colors = new Array(reference[0], reference[1], reference[3], reference[5]);
				} else if (count == 5) {
				var colors = new Array(reference[0], reference[1], reference[2], reference[3], reference[5]);
			} else if (count == 6) {
				var colors = reference;
			}

			$(dl).each(function(){
				var color = '#' + colors[c];

				$(this).find('i:first').css('color', color);
				data.push({value:parseInt($(this).find('span:first').text().replace('%', '')), color:color});

				c++;
			});

			var element = $(this);
			setTimeout(function(){
				new Chart($(element).get(0).getContext('2d')).Doughnut(data, {
					animationSteps: window.touch ? 20 : 50,
					animateRotate: window.touch ? false : true,
					animateScale: true,
					animationEasing: 'easeOutExpo'
				});
			}, delay);

			delay += window.touch ? 450 : 250;
		});
	});
});
