(function(){
	$('#submit_form').on('click', function(event){
		if($('input[name=name]').val() !== '' &&
		$('input[name=zip01]').val()   !== '' &&
		$('input[name=pref01]').val()  !== '' &&
		$('input[name=addr01]').val()  !== '' &&
		$('input[name=addr02]').val()  !== '' &&
		$('input[name=content]').val() !== '' ){
			alert('送信しました');
			return false;
	}else{
		alert('入力項目に不備があります。');
		return false;
	}});
})();