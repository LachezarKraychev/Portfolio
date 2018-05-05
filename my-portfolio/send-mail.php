<?php ob_start();

	if(isset($_POST['Send'])) {
		
		$to = "lkraichve@abv.bg";
		$from = $_POST['Name'];
		$company = $_POST['Company'];
		$theme = $_POST['Theme'];
		$txt = $_POST['message'];
		$email = $_POST['E-mail'];
		$headers = "From: {$email}" . "\r\n" .

		mail($to,$from,$company,$theme,$headers);		
		
		header("Location: contact-me.html");
		
	}

?>