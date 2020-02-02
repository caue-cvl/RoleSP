<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];


		$mailto = "caue.cavaliere@fatec.sp.gov.br";
		$headers = "From: RoleSP - ". $email;
		$txt = "Message from ".$name.".\n\n".$message;
		mail($email, $subject, $txt, $headers);
		header("Location: index.php?mailsend");

	}
  ?>