<?php
if (isset($_POST['test']))
{
	$submit_array = array_keys($_POST['test']);
	$action = $submit_array[0];
	echo $action;
}
?>

<head>
	<title>test</title>
</head>

<body>
	<form method="post">
		<p><input type="submit" name="test[one]" value="1" />
		<input type="submit" name="test[two]" value="2" />
		<input type="submit" name="test[three]" value="3" />
		<input type="submit" name="test[four]" value="4" /></p>
		<p><input type="submit" value="Test" name="test[five]"  /></p>
	</form>
</body>