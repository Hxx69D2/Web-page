<?php
if (isset($_POST['test']))
{
	foreach ($_POST['test'] as $test)
	{
		echo $test;
	}
}
?>

<head>
	<title>test</title>
</head>

<body>
	<form method="post">
		<p><input type="checkbox" name="test[]" value="1" id="one" />option 1<br />
		<input type="checkbox" name="test[]" value="2" id="two" />option 2<br />
		<input type="checkbox" name="test[]" value="3" id="three" />option 3<br />
		<input type="checkbox" name="test[]" value="4" id="four" />option 4</p>
		<p><input type="submit" value="Test" name="send" id="send" /></p>
	</form>
</body>