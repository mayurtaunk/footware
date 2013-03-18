<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
<div id="container">
	<h1>welcome to Code Igniter </h1>
	<table cellpadding=3 cellspacing=10>
		<tr>
			<td> User Name: </td>
			<td> <?php echo $user_name ?> </td>
		</tr>
		<tr>
			<td> Contact Number: </td>
			<td> <?php echo $contact ?> </td>
		</tr>
		<h2>Add</h2>
		<p> <?php  echo $var1. " + " .$var2. " = " . $addTotal; ?></p>
		<h2>Subtract</h2>
		<p> <?php  echo $var1. " - " .$var2. " = " . $subTotal; ?></p>
		<a href="/learn/index.php/home">home</a><br>
	 	<a href="about">about</a>
</div>

</body>
</html>