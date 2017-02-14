<?php 
require 'header.php';
 ?>
<body>
	<h2>Simple CRUD</h2>
	
	<a href="create.php">Lets Tweet</a></p>
	
	<h3>Tweeted history</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Tajuk</th>
			<th>Tweet</th>
			<th>When?</th>
			<th>Action</th>
		</tr>
<?php 
// include connection to db
include('config.php');
use Carbon\Carbon;
include('secret.php');


// select query from db
$query = mysql_query("SELECT * FROM tweets ORDER BY created_at DESC") or die(mysql_error());

if(mysql_num_rows($query) == 0){	//check if null
	
	//if null/ empty
	echo '<tr><td colspan="6">Tidak ada tweet!</td></tr>';
	
}else{	//else not null
	
	//if data is not empty then need while
	$no = 1;	// increament declaration
	while($data = mysql_fetch_assoc($query)){	// for row of each data 
	

	$tweet_time = Carbon::parse($data['created_at']);

	// row of each data
	echo '<tr>';
	echo '<td>'.$no.'</td>';	// increament number
	echo '<td>'.$data['title'].'</td>';	
	echo '<td>'.$data['tweet'].'</td>';	
	echo '<td>'.$tweet_time.'</td>';
	echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="delete.php?id='.$data['id'].'" onclick="return confirm(\'Sure delete this?\')">Delete</a></td>';	//link to edit and delete by id
	echo '</tr>';
		
	$no++;	//add increament to number
		
	}
	
}

?>

</table>
</body>
</html>