<?php
//processing update
 
// check if post data sent from the form exist or null
if(isset($_POST['save'])){
	
	//include connection to db
	include('secret.php');
	
	// pass all post data sent
	$id			= $_POST['id'];	
	$title		= $_POST['title'];	
	$tweet		= $_POST['tweet'];	
	
	// update into db by id=$id
	$update = mysql_query("UPDATE tweets SET title='$title', tweet='$tweet' WHERE id='$id'") or die(mysql_error());
	
	//if query update success
	if($update){
		
		echo 'Tweet edited! ';		
		echo '<a href="index.php">Main page</a>';
		
	}else{
		
		echo 'Fail to edit tweet! ';
		echo '<a href="edit.php?id='.$id.'">Back</a>';	
		
	}
 
}else{
 
	//redirect back
	echo '<script>window.history.back()</script>';
 
}
?>