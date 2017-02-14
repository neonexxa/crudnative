<?php
//  begin deleting
 
// check if url has get data
if(isset($_GET['id'])){
	
	// inlcude file connection
	include('secret.php');
	
	//  grab data get dlm url
	$id = $_GET['id'];
	
	// check db if tweet exists
	$cek = mysql_query("SELECT id FROM tweets WHERE id='$id'") or die(mysql_error());
	
	// check if null
	if(mysql_num_rows($cek) == 0){
		
		//if no data rediect back
		echo '<script>window.history.back()</script>';
	
	}else{
		
		// if data is in database , delete data in id where id=$id
		$del = mysql_query("DELETE FROM tweets WHERE id='$id'");
		
		//if query DELETE success
		if($del){
			
			echo 'Tweets deleted! ';		
			echo '<a href="index.php">Back</a>';	
			
		}else{
			
			echo 'Fail to delete tweet! ';			
			echo '<a href="index.php">Back</a>';	
		
		}
		
	}
	
}else{
	
	//redirect back
	echo '<script>window.history.back()</script>';
	
}
?>