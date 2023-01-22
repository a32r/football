$(document).ready(function() {
	panes = $('.pane');
	for (p = 0; p < panes.length; p++) {
		pane = $('.pane').eq(p);
		rows = pane.children('.row');
		for (i = 1; i <= rows.length; i++) {
			lCount = rows.find('.lCount').text()[i];
			rCount = rows.find('.rCount').text()[i];
			if (lCount < rCount) {
				rows.eq(i).find('.rCount').css({
					'font-weight': 'bold',
					'font-size': 'xx-large'
				});
				countDiv = rows.eq(i).children().eq(1);
				countDiv.css('background', 'linear-gradient(to left, lightgreen, #FF4D4D)');
			}
			if (lCount > rCount) {
				rows.eq(i).find('.lCount').css({
					'font-weight': 'bold',
					'font-size': 'xx-large'
				});
				countDiv = rows.eq(i).children().eq(1);
				countDiv.css('background', 'linear-gradient(to right, lightgreen, #FF4D4D)');
			}
		}
	}
});
