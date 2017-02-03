$( document ).ready(function() {
	var servertime = $("#time-server").val();
	var servertime = JSON.parse(servertime);
	for(var i in servertime){
		var nextYear = moment.tz(servertime[i], "Asia/Bangkok");
		$('.clock'+[i]).countdown(nextYear.toDate(), function(event) {
			$(this).html(event.strftime('%D:%H:%M:%S'));
		}).on('finish.countdown', function(event) {
			location.reload();
		});
	}
});