	$(document).ready(function(){
		$('.btn btn-primary').click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.badan').load('home.php');
			}else if(menu == "tentang"){
				$('.badan').load('tentang.php');
			}else if(menu == "tutorial"){
				$('.badan').load('tutorial.php');
			}else if(menu == "sosmed"){
				$('.badan').load('sosmed.php');
			}
		});


		// halaman yang di load default pertama kali
		$('.badan').load('home.php');

	});
