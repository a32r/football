$(document).ready(function() {
	pane = $('.pane').eq(0).children('.row');
	for (i = 1; i <= pane.length; i++) {
		lCount = pane.find('.lCount').text()[i];
		rCount = pane.find('.rCount').text()[i];
		if (lCount < rCount) {
			pane.eq(i).find('.rCount').css({
				'font-weight': 'bold',
				'font-size': 'xx-large'
			});
			countDiv = pane.eq(i).children().eq(1);
			countDiv.css('background', 'linear-gradient(to left, lightgreen, #FF4D4D)');
		}
		if (lCount > rCount) {
			pane.eq(i).find('.lCount').css({
				'font-weight': 'bold',
				'font-size': 'xx-large'
			});
			countDiv = pane.eq(i).children().eq(1);
			countDiv.css('background', 'linear-gradient(to right, lightgreen, #FF4D4D)');
		}
	}
});
