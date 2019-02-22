<?php 
	$errMsg = ["", "", "", "", "", "", "", ""];
	$validation = false;
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		for ($i = 1; $i <= 7; $i++) { 
			if (empty($_POST["q" . $i])){
				$errMsg[($i-1)] = "This field is empty";
			}
		}
		if (checkValues($errMsg, "") == true){
			$validation = true;
		}
	}

	function checkValues($myArray, $symbol){
		for ($i = 0; $i < count($myArray); $i++){
			if ($myArray[$i] != $symbol){
				return false;
			}
		}
		return true;
	}
 ?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Mad Libs</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	</head>
	<body>
		<style type="text/css">
			<?php include "css/style.css"; ?>
		</style>
		<div class="wrapper">
			<header>
				<div class="logo">
					<h1>Mad Libs</h1>
				</div>
				<nav>
					<ul class="navbar">
						<li>
							<a href="index.php">Er heerst paniek...</a>
						</li>
						<li>
							<a href="onkunde.php">Onkunde</a>
						</li>
					</ul>
				</nav>
			</header>
			<section>
				<h2>Onkunde</h2>
				<?php 
				if ($validation == false){
					include("include/onkundeForm.php");
				} else {
					include("include/onkunde.php");
				}	
				 ?>
			</section>
		</div>
	</body>
</html>