<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
<form method="post" action="#">
	<input type="text" name="email">
	<br>
	<input type="text" name="subject">
	<br>
	<textarea name="message" rows="4" cols="6">
		
	</textarea>
	<br>
	<input type="submit" name="btns" value="send">
</form>
</body>
</html>

<?php
if (isset($_POST['btns'])) {
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	mail($email, $subject, $message);
}
?>