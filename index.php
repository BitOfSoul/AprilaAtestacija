<?php
include("assets/php/config.php");
$main = new DB_class();
$main->construct();
$main->check();
session_start();
if(!isset($_SESSION['login']))
{ header("location:login.php"); }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="noformejums.css" />



<title>Sākums</title>
</head>
<body>
	<div id = "vidus">
		<?php 
			echo "Esi sveicināts: {$_SESSION['login']}<br/>";

		?>
		<form action = "index.php" method = "post">
		<input type = "submit" name = "exit" value = "Atslēgties"/>
		</form>
		<?php
			if(isset($_POST["exit"])){
				session_destroy();
				header("Location:login.php");
			}
		?>
		
		<!--Вывод новостей-->
		<div>
		<?php
			$res = mysqli_query($main->construct(),"SELECT * FROM articles order by idArticles desc limit 5");
			while ($row = mysqli_fetch_array($res) ){
			echo "<br />". $row['Title'] . "<br />";  
			echo $row['Author'] .  "<br />";
			echo $row['Content'];
			echo "<br />";
		}
		?>
		</div>
	</div>

</body>
</html>