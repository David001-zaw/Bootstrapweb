<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		include 'userinfo.php';

		$result = mysqli_query($con, "SELECT * FROM userinfodata");

		while ($row = mysqli_fetch_assoc($result)):
	?>
		<h3><?php echo $row['email'] ?></h3>
	<?php endwhile; ?>
</body>
</html>