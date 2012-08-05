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
<h2>Step One</h2>

<p>It takes 3 short steps only to create your creature!</p>

<h4>Step One: Information Gathering</h4>

<form method="post" action="step_two.php">

<p>
	<label for="name">Name:</label>
	<input type="text" name="name" id="name">
</p>

<fieldset>
	<legend>Choose your creature type:</legend>
	<p>
		<input type="radio" name="creature_type" value="monster" id="monster">
		<label for="monster">Monster</label>
	</p>
	<p>
		<input type="radio" name="creature_type"  value="robot" id="robot">
		<label for="robot">Robot</label>
	</p>
</fieldset>

<p>
	<input type="submit" value="Go to step 2 (if you dare)">
</p>

</form>

</div>

<script type="text/javascript" src="js/jquery-1_4_2_min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>
</body>
</html>
