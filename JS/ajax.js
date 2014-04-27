$(document).ready(function(){
		var $cmbUsers = $('#users');
		var $txtHint = $('#txtHint');
		$cmbUsers.change(function() {
			var $val = $cmbUsers.val();
			
			if ($val=="") {
				$txtHint.html("");
				return;
			} 
			
			/*
			$.ajax({
				type: "GET",
				url: "php.php",
				dataType: "text",
				data: {"q" : $val},
				success:function( response ){
					$txtHint.html( response );
			}, 
			error:function(xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
			
			});
			*/			
			$.get("../php/php.php", {q:$val}, function(response){
				console.log($val);
				$txtHint.html( response );
			});
			
		});
	});