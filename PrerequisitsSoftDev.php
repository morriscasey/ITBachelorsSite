<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>
    <title>BAS Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<style>
		.container h2, .container p{
			text-align: center;
		}
		button {
			margin: 0 auto;
		}
		.container {
			max-width: 850px; 
			background-color: #ddd;
			border-radius: 0 0 5px 5px;
		}
	</style>
</head>

<body>
	<?php session_start(); 
		if ($_SESSION['degree'] == 'SD'){
			//echo 'Software Development <br>Program Prerequisites';
		}
		else if ($_SESSION['degree'] == 'NAS'){
			//echo 'Network Administration & Security <br>Program Prerequisites';
		}
	?> 
	<div class="container">
		<!-- If we do this in an MVC view we would be able to do both of the forms on one page and use the selection passed to insert the proper lines + checkboxes -->
		<?php 
			if ($_SESSION['degree'] == 'SD' || $_SESSION['degree'] == 'NAS'){
				include 'softwareDevPre.php';
			}
			else {
				include 'undecided.php';
			}
		 ?>
	</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>