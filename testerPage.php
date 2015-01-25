<?php
session_start();
?>


<html>
<head>
    <title>BAS Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <style>
        .form-inline {
        padding:5px;
    }
        .form-inline > * {
        margin:10px 3px !important;
    }
    body {
        padding: 30px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
</head>
<body>
    <div class="container">    
    	<h2>Contact Info</h2>
     
     <!--First and last names form-->
     <form class="form-inline" method="post" action="page2.php" role="form">
       
     </form>
     
     <!--Email and Preferred Phone # form-->
     <form class="form-inline" action="page2.php" method="post" role="form">
     <div class="form-group">
         <label for="First">First:</label>
         <input type="text" class="form-control" id="first" name="fname" placeholder="First">
       </div>
       <div class="form-group">
         <label for="last">Last:</label>
         <input type="text" class="form-control" id="last" name="lname" placeholder="Last">
       </div>
       <div class="inline-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email" name="email" placeholder="Email">
       </div>
       <div class="inline-group">
         <label for="phone">Preferred Phone:</label>
         <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
         <input type="number" class="form-control" id="sid" name="sid" placeholder="Student ID">
       </div>

	    <!--Radio buttons to choose degree plan-->
	    <div class="radio">
	        <label><input type="radio" name="degree" value="SD" checked="checked">Software Development</label>
	    </div>
	    
	    <div class="radio">
	        <label><input type="radio" name="degree" value="NAS">Network Administration & Security</label>
	    </div>
	    
	    <div class="radio">
	        <label><input type="radio" name="degree" value="NA">Undecided</label>
	    </div>
	    
	    <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary center-block">Submit</button>
	</form>
    </div>

    </body>
</html>


<!-- <form action="page2.php" method="post" >
	<input type="text" name="fname" placeholder = "Firstname"> <br>
	<input type="text" name="lname"placeholder = "lastName!"> <br>
	<input type="text" name="studentid"placeholder = "lastName!"> <br>
		<input type="radio"name="degree" value="SD" checked="checked">Software Development<br>
		<input type="radio"name="degree" value="NSAA">Network Security and Administration<br>
		<button type = "submit" name ="submitForm">Submit</button>
	
</form>
 -->

