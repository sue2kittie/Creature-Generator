<?php
session_start();

$name=$_SESSION['name'];
$creature_type=$_SESSION['creature_type'];
	

$arr_nav = array( array( "id" => "apple", 
          "url" => "apple.html",
          "name" => "My Apple" 
        ),
        array( "id" => "orange", 
          "url" => "orange/oranges.html",
          "name" => "View All Oranges",
        ),
        array( "id" => "pear", 
          "url" => "pear.html",
          "name" => "A Pear"
        )               
 );
 $creature = array( array("nam" => "Frappiccino",
						  "url" => "images/robot.png",
						  
 );
 
 
 
$mon = array(1 => 'You have the right to remain silent. Anything you say will be misquoted, then used against you',
			 2 => 'You dont find clowns funny, and find everyone guilty for not making you laugh, now you want to get revenge', 
			 3 => 'You like to shoot people in the head',
			 4 => 'You like cutting peoples hair and use it to make teddy bears');
			 
$rob = array(1 => 'You let people have one last icecream before you go and get them',
			 2 => 'You think theres no more fun at the Seneca webmaster program because you are preparing something',
			 3 => 'You are thinking who will eat for dinner tonight. Maybe Mr.potato head',
			 4 => 'You think guns are for children you use you claws');

 if ($creature_type=="monster"){
	$url="images/monster.png";
	$creature_name=$name."-monstishiko";
	echo $creature_name;
	$s=rand(1, 4);
	$description=$mon[$s];

	}
if ($creature_type=="robot"){

	$url="images/robot.png";
	$creature_name=$name."-robotishko";
	$s=rand(1, 4);
	$description=$rob[$s];
	}
	
//else($creature_type==null){
//	echo "go to step one and choose  a creature type yo!";
//	}



$arr_nav = array( array( "id" => "apple", 
          "url" => "apple.html",
          "name" => "My Apple" 
        ),
        array( "id" => "orange", 
          "url" => "orange/oranges.html",
          "name" => "View All Oranges",
        ),
        array( "id" => "pear", 
          "url" => "pear.html",
          "name" => "A Pear"
        )               
 ); 
 $f=rand(0,2);
 echo $f;
echo ($arr_nav[$f]["id"]);

//foreach ($arr_nav[0] as $key => $value){
	//echo "Key:$key; Value:$value<BR>";
	
	//if ($key=="url"){
	//$test=$value;
	//echo $test;}



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

<h1>Seneca College</h1>
<h2>Webmaster Program</h2>
<h3>Creature Generator</h3>

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
