$(document).ready(function() {
	team = $('.pane .row div:first-of-type, .pane .row div:last-of-type');
	team.click(function() {
		team.css('background', '');
		teamName = $(this).text();
		sameTeams = $(".pane .row div:contains('" + teamName + "')");
		sameTeams.css('background', 'red');
	});
});
