
<?php
	if (isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$mail_from = $_POST['email'];
		$telephone_no = $_POST['phone'];
		$state = $_POST['state']
		$subject = "New Inquiry"
	
		$mailTo = "r.j.west@live.com.au";
		$headers = "From: " .$mail_from;
		$txt = "Phone No.:" .$telephone_no "/n State:" .$state

		mail($mailTo, $subject, $txt);
		header("Location: Contact.html?mailsend");
	}

?>
