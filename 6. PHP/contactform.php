<?php

	if ($_POST["submit"]) {

		$result='<div class="alert alert-success"> Form submitted</div>';

		if(!$_POST['name']) {
			$error .= "<br />Please enter your name";
		}

		if(!$_POST['email']) {
			$error .= "<br />Please enter your email";
		}

		if(!$_POST['comment']) {
			$error .= "<br />Please enter a comment";
		}

		if($_POST['email'] != "" && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

			$error .= "<br /> Please enter a valid email address";

		}

		if($error) {
			$result='<div class="alert alert-danger"><strong>There were errors on submitting your form.</strong>'. $error . '</div>';
		} else {
			if(mail("mausv@me.com", "Contact form", "Name: ".$_POST['name']." Email: ". $_POST['email'] . " Comment: " . $_POST['comment'])) {
				$result='<div class="alert alert-success"><strong>Thanks!</strong>'. $error . '</div>';
			} else {
				$result='<div class="alert alert-danger"><strong>Sorry. Please try later.</strong>'. $error . '</div>';
			}

		}

	}

?>

<!doctype html>
<html>
<head>
    <title>Contact Form</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />    

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<style type="text/css">

	.emailForm {
		border: 1px solid grey;
		border-radius: 10px;
		margin-top: 20px;
	}

	form {
		padding-bottom: 20px;
	}

</style>

</head>

<body>
<div class="container">
	
	<div class="row">

		<div class="col-md-6 col-md-offset-3 emailForm">

			<h1>My email form</h1>

			<?php echo $result; ?>

			<p class="lead">We'll get in touch as soon as we can.</p>

			<form method="post">

				<div class="form-group">

			    	<label for="name">Name</label>
			    	<input name="name" type="text" class="form-control" placeholder="Your name" value="<?php echo $_POST['name'] ?>">

			    </div>

			    <div class="form-group">
			    	<label for="email">Email</label>
			    	<input name="email" type="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email'] ?>">

			    </div>

			    <div class="form-group">
			    	<label for="comment">Comment</label>
			    	<textarea name="comment" class="form-control" type="comment"><?php echo $_POST['comment'] ?></textarea>

			    </div>

			    	<input class="btn btn-success" type="submit" name="submit" value="Submit"/>

		    </form>

		</div>

	</div>   

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>