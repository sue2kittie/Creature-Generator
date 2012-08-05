<?php


// Start the session

session_start(); // turn on sessions.

// Harvest their choice and sanitize it.
$name=$_POST['name'];
$name=strip_tags($name);
//echo $name;

// Save their choice into a session var
// no dollar sign
$_SESSION['name']=$name;

//http://stackoverflow.com/questions/842956/php-foreach-loop-through-multidimensional-array

//  if it exists 

if (isset($_POST['creature_type'])) {
	$creature_type = $_POST['creature_type'];
} else {
	echo "not exist";
}

$_SESSION['creature_type']=$creature_type;
echo "the type is: ".$creature_type;
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
</head>
<body>

<div id="holder">

<h1>Creature Generator</h1>
<h2>Step Two</h2>

<p>Step right up, step right up! Learn your creature-name in 3 short steps!</p>

<h4>Step Two: Labratory work in process</h4>

<p>Thanks <?php echo $name;?></p>

<p>Message: a surprise is being prepared for you...you have 2 options you can either run away now or go to the next step and find out what will happen to you.. </p>


<form method="post" action="step_three.php">
	<input type="submit" value="when you are ready click here">
</form>

</div>

<script type="text/javascript" src="js/jquery-1_4_2_min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>


</body>
</html>
