<?php 
require 'header.php';
 ?>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Main page</a></p>
	
	<h3>New Tweet</h3>
<form action="create-process.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>title</td>
				<td>:</td>
				<td><input type="text" name="title" size="30" required></td>
			</tr>
			<tr>
				<td>tweet</td>
				<td>:</td>
				<td><textarea  name="tweet" required></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="create" value="Tweet!"></td>
			</tr>
		</table>
	</form>

	</body>
</html>