<?php
function dbConnect($usertype, $connectionType = 'mysqli')
{
	$host = 'arnorcrosscouk.ipagemysql.com';
	$db = 'arnorcross';
	if ($usertype  == 'read')
	{
		$user = 'wbread';
		$pwd = 'd%hZ]T89rV*-*WBy';
	}
	elseif ($usertype == 'write')
	{
		$user = 'wbwrite';
		$pwd = '-{5\zP\!V9&U-p5F';
	}
	else
	{
		exit('Unrecognized connection type');
	}

	if ($connectionType == 'mysqli')
	{
		$result = mysqli_connect($host, $user, $pwd, $db);
		if (!$result)
		{
			die ('Cannot open database');
		}
		return $result;
	}
	else
	{
		try
		{
			return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
		}
		catch (PDOException $e)
		{
			echo 'Cannot connect to database';
			exit;
		}
	}
}
