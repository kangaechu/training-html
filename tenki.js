(function(){
	$.ajax({
		url: 'http://localhost/test/tenki.php'
	}).then(
	function(data, status, xhr) {
		$('#forecast').html(data);
	},
	function(xhr, status, error) {
		console.log(error);
	});
})();