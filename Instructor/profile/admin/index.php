<?php
session_start();
include("includes/connection.php");
if($_SESSION['auth_admin']==1);
else{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Control Panel - Online Profile System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="container"> 
	<?php include("includes/header.php");?>
	<div class="row1"> 

	<?php include("includes/menu.php");?>
	<div class="pages">
		<h1>Home</h1>
		<hr/>
		Wlecome to our Profile System		
	</div>

	</div>
	<?php include("includes/footer.php");?>
	
</div>
</body>
</html>