<?php 
require 'header.php';
 ?>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Main page</a> / <a href="create.php">New tweet</a></p>
	
	<h3>Edit tweet</h3>
	
	<?php
	// connect to db
	include('secret.php');
	
	// grab id from get url
	$id = $_GET['id'];
	
	// select data from db where id=$id
	$show = mysql_query("SELECT * FROM tweets WHERE id='$id'");
	
	// check if exist in db or not
	if(mysql_num_rows($show) == 0){
		
		// if null
		echo '<script>window.history.back()</script>';
		
	}else{
	
		// if not null
		$data = mysql_fetch_assoc($show);	// pass data to variable
	
	}
	?>
	
	<form action="edit-process.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- pass hidden input of tweet id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="title" value="<?php echo $data['title']; ?>" required></td>	<!-- value from $data -->
			</tr>
			<tr>
				<td>Tweet</td>
				<td>:</td>
				<td><input type="text" name="tweet" value="<?php echo $data['tweet']; ?>" required></td>    <!-- value from $data -->
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="save" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>