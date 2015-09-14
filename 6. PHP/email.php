<!DOCTYPE HTML>
<html>
<head>

	<title>Email</title>

</head>

<body>

	<div>
		<?php

			$emailTo = "mausv97@gmail.com";
			$subject = "I hope this works.";
			$body = "This is awesome.";
			$headers = "From: mausv@me.com";

			if (mail($emailTo, $subject, $body, $headers)) {

				echo "Mail sent successfully!";

			} else {

				echo "Mail not sent";

			}

		?>

	</div>	

</body>
</html>