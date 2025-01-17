<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">		
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="feedback.css">

</head>

<body>	

<div class="view">
	<img src="view2.jpg">
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
			<h1 class="text-center mt-5 font-weight-bold">Feedback</h1>
			<hr class="bg-white">
			<h6 class="text-center">Please write your feedback below:</h6>
			<h3 class="mt-4">How do you rate your overall experience?</h3>

			<form action="connectfeed.php" method="post">
				<label class="radio-inline"><input type="radio" name="experience" value="bad" required="required">Bad</label>
				<label class="radio-inline"><input type="radio" name="experience" value="average" required="required">Average</label>
				<label class="radio-inline"><input type="radio" name="experience" value="good" required="required">Good</label>

			</div>
			</div>					

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Full Name<br>
					<input type="text" id="text" name="fullname" required="required" placeholder="Name"></label>

					<label class="col-md-4">Email<br>
					<input type="text" id="text" name="email" required="required" placeholder="E-mail"></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Age<br>
					<input type="number" id="text" name="age" required="required" placeholder="age"></label>

					<label class="col-md-4">Phone<br>
					<input type="number" id="text" name="phone" required="required" placeholder="Phone No."></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-8">Message<br>
					<textarea id="message" name="message" required="required" placeholder="Write yor message here" cols="48" rows="5"></textarea></label>
			</div>

						<div class="row">
				<div class="col-md-2"></div>
				<button class="btn btn-primary" style="width: 50.5%; position: absolute; margin-left: 15%;">Submit</button>
			</div>
			</form>
</div>

</body>
</html>