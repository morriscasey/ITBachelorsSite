<?php
// page2.php

session_start();

echo 'Welcome to page #2<br/>';

/*echo $_SESSION['favcolor']; // green
echo '<br>';
echo $_SESSION['animal'];   // cat
echo '<br>';
echo date('Y m d H:i:s', $_SESSION['time']);*/
if (isset($_POST)){
	$_SESSION['degree'] = $_POST['degree'];
	$_SESSION['sid'] = $_POST['sid'];
	$_SESSION['fname'] = $_POST['fname'];
	$_SESSION['email'] = $_POST['email'];
}
echo 'first Name is ' . $_SESSION['first'] . '<br>' ;
echo 'sid used is: ' . $_SESSION['sid'];
echo 'email address provided: ' .  $_SESSION['email'];
echo '<br>Degree selected: ' . $_SESSION['degree'];
// You may want to use SID here, like we did in page1.php
echo '<br /><a href="page1.php' . SID . '">page 1</a>';
?>