$( document ).ready(function() {
	var servertime = $("#time-server").val();
	var nextYear = moment.tz("2017-02-10 00:55", "Asia/Bangkok");
	$('.clock').countdown(nextYear.toDate(), function(event) {
		$(this).html(event.strftime('%D:%H:%M:%S'));
	}).on('finish.countdown', function(event) {
  		$(this).html('This offer has expired!')
    	.parent().addClass('disabled');
	});
});