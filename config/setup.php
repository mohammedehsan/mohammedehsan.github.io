<?php
// Setup File: 
# Database Connection Here.......

$dbc = mysqli_connect('localhost','dev','qwer1234','atomcms') OR die('Could not connect because: '.mysqli_connect_error());

# Functions:
include('funcitons/data.php');

$site_title = 'AtomCMS 2.0';

if(isset($_GET['page'])){
	$pageid = $_GET['page'];  // Set $pageid to equal the value given in the  URL
	
}else{
	
	$pageid = 1; // Set $pageid equal to 1 or the Home Page.
	
}


# Page Setup 

$page = data_page($dbc, $pageid);
	
	


?>
