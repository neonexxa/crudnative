<?php
// begin insert data
 
// adding API
require 'config.php';

// using api
use Carbon\Carbon;


if(isset($_POST['create'])){
	
	// include db connection
	include('secret.php');

	
	$title		= $_POST['title'];	// passing parameter from form
	$tweet		= $_POST['tweet'];	// passing parameter from form
	$now 		= Carbon::now()->toDateTimeString(); // setting current time

	// query insert into db
	$input = mysql_query("INSERT INTO `tweets` (`title`, `tweet`, `created_at`) VALUES('$title', '$tweet', '$now');") or die(mysql_error());
	
	// if query input success
	if($input){
		
		echo 'Successfully tweeted. '; 
		echo '<a href="index.php">Main page</a>';
		
	}else{
		
		echo 'Opps !! Fail to tweet that. ';			
		echo '<a href="create.php">Back</a>';	
		
	}
 
}else{	
 
	//redirect back
	echo '<script>window.history.back()</script>';
 
}
?>