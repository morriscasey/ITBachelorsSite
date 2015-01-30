<?php
    //*** Start a session
    session_start();
    //*** Start the buffer
    ob_start();
    
?>
<!DOCTYPE html>

<html>
<head>
    <title>BAS More Info Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></script>    
    <script>
		window.onload = function(){
			if (document.getElementById("status1").checked == true) {
				document.getElementById("current").style.display = "block";
			}
		}
	</script>
</head>
    
<body>
<div class="container">    
    <h2 class="text-center">Tell Us More</h2>
    <div class="wholeThing"> 
        <form class="form-inline" method="post" action="softwareDevPre.php" role="form" onsubmit="return validate()">
            <div class="form-group">
                <fieldset><legend>Please Select One:</legend>					
					<input type="radio" value="current" name="status" id="status1">
						<label for="status1">I am currently a student at Green River</label><br>
					<div id="current" class="disabled">
						<label for="sid" class="control-label">Student ID:&nbsp;</label>
						<input type="number" class="form-control" id="sid" name="sid" required disabled>
					</div>
					<input type="radio" value="new" name="status" id="status2" required>
						<label for="status2">I am a new student</label>
				</fieldset>
            </div>
        
    
		<!--Check boxes to choose statuses-->
			<div class="category">          
				<fieldset>
				<legend>I am a (please check all that apply):</legend>
					<input type="checkbox" value="veteran" name="stats[]" >
								<label>Veteran</label><br>
					<input type="checkbox" value="international" name="stats[]" >
								<label>International student</label><br>
					<input type="checkbox" value="running-start" name="stats[]" >
								<label>Running Start student</label><br>
				</fieldset>
			</div>
			<label class="col-md-4 control-label" for="singlebutton"></label>
			<div class="col-md-4">
				<input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary center-block" value="Continue">
			</div>
		
		</form>
</div>

<script>
	
	var current = document.getElementById("current");
	var sid = document.getElementById("sid");
	var status1 = document.getElementById("status1");
	var status2 = document.getElementById("status2");
	
	status1.onclick = change;
	status2.onclick = change;
	
	function change() {
		if (this.id=="status1"){
			sid.disabled=false;
			$("#current").show("slow");
		} else {
			sid.disabled=true;
			$("#current").hide("slow");
		}
	}
	
	function validate() {
		if (sid.disabled == false && sid.value.length != 9) {
			alert("Student ID must be 9 digits.");
			return false;
		}
		
		if (status1.checked) {
		    
		   <?php $_SESSION["student"] = "current"; ?>
		   
		} else if (status2.checked) {
		    
		    <?php $_SESSION["student"] = "new"; ?>
		    
		}
		return true;
	}
	
</script>
<?php
echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
 //Flush buffer
 ob_flush();
?>