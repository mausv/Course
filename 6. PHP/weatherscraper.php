<!doctype html>
<html>
<head>
    <title>Weather Scraper</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />    

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<style type="text/css">

	html, body {
		height: 100%;
	}

	.container {
		background-image: url("bg.jpg");
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
		padding-top: 200px;
	}

	.center {
		text-align: center;
	}

	.white {
		color: white;
	}

	p {
		padding-top: 30px;
		padding-bottom: 30px;
	}

	button {
		margin-top: 20px;
	}

	.alert {
		margin-top: 20px;
		display: none;
	}

</style>

</head>

<body>

<div class="container">

	<div class="row">

		<div class="col-md-6 col-md-offset-3 center white">

			<div class="row">

				<h1 class="center white">Weather Scraper</h1>

				<p class="lead center white">See your weather the right way.</p>

				<form>

					<div class="form-group">

						<label for="city">City</label>
						<input class="form-control" name="city" id="city" type="text" placeholder="Eg. London, Paris, San Francisco, Monterrey.."/>

					</div>

					<button id="findMyWeather" type="submit" class="btn btn-success btn-lg">Find My Weather</button>

				</form>


				<div id="success" class="alert alert-success"></div>

				<div id="fail" class="alert alert-danger"> Didn't find the city.</div>
				
				<div id="noCity" class="alert alert-danger"> Please enter a city.</div>

			</div>

		</div>

	</div>

</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script type="text/javascript">

	$("#findMyWeather").click(function(event) {

		$(".alert").hide();

		event.preventDefault();

		if ($("#city").val() != "") {

			$.get("scraper.php?city=" + $("#city").val(), function (data) {

				if(data == "") {

					$("#fail").fadeIn();

				} else {

					$("#success").html(data).fadeIn();

				}

			});
		} else {
			$("#noCity").fadeIn();
		}

	});

</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>