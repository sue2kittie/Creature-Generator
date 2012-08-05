<?php
session_start();

$name=$_SESSION['name'];
$creature_type=$_SESSION['creature_type'];
	
//multi-dimensional array

$creature = array( array("nam" => "-Frappiccino",
						  "url" => "images/monster.gif",
						  "description" => "You have the right to remain silent. Anything you say will be misquoted, then used against you"
						  ),
					array("nam" => "-Dereko",
						  "url" => "images/monster.png",
						  "description" => "You dont find clowns funny, and find everyone guilty for not making you laugh, now you want to get revenge"
						  ),
					array("nam" => "-Valentino",
						  "url" => "images/monster1.png",
						  "description" => "You love to shoot people in the head"
						  ),
					array("nam" => "-Hairoo",
						  "url" => "images/monster3.png",
						  "description" => "You like cutting peoples hair and use it to make teddy bears"
						  ),
					array("nam" => "-Robarito",
						  "url" => "images/robot.png",
						  "description" => "You let people have one last icecream before you go and get them"
						  ),
					array("nam" => "-Roberdeniro",
						  "url" => "images/robot.gif",
						  "description" => "You think theres no more fun at the Seneca webmaster program because you are preparing something"
						  ),
					array("nam" => "-Hoborto",
						  "url" => "images/robot1.png",
						  "description" => "You are thinking who you will eat for dinner tonight. Maybe Mr.potato head"
						  ),
					array("nam" => "-Clawwww",
						  "url" => "images/robot2.png",
						  "description" => "You think guns are for children you use you claws"
						  )
 );
 
 
//testing
 if ($creature_type=="monster"){
		$r=rand(0,3);
		$nam=($creature[$r]["nam"]);
		$description=($creature[$r]["description"]);
		$creature_name=$name.$nam;
		$url=($creature[$r]["url"]);
	}
	
if ($creature_type=="robot"){
		$r=rand(4,7);
		$nam=($creature[$r]["nam"]);
		$description=($creature[$r]["description"]);
		$creature_name=$name.$nam;
		$url=($creature[$r]["url"]);
	}
	


//emailing Derek
//$message="hi derek this is the assignment";
//$email="sue2kittie@gmail.com";
//$sender="Sura";
//$from = "From: $sender <$email>";
//$to = "sue2kittie@gmail.com";
//$subject = "Creature Generator Assignment";
//$full_email = $message."\r\n Creature Type: $creature_type"."\r\n Creature Name: $creature_name"."\r\n Description: $description";

//mail($to, $subject, $full_email, $from);


	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
<style>
img {
	margin-left:40%;
}
form {
	margin-left: 36%;
	}
</style>
</head>
<body>

<div id="holder">

<h1>Creature Generator</h1>
<h2>Step Three</h2>
<h3></h3>

<p>Step right up, step right up! Learn your creature-name in 3 short steps!</p>

<h4>Step Three: The Transformation</h4>

<p>I see your real name was <?php echo $_SESSION['name'];?></p>

<h3>Your name is : <?php echo $creature_name ?></h3>

<p><?php echo $description?></p>
<img alt="creature" src="<?php echo $url?>" />
<hr />

<form method="post" action="step_one.php">
	<input type="submit" value="Get transformed again?">
</form>
</div>

<script type="text/javascript" src="js/jquery-1_4_2_min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>


</body>
</html>
