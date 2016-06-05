<?php
function dbConnect($usertype, $connectionType = 'mysqli')
{
	$host = 'arnorcrosscouk.ipagemysql.com';
	$db = 'arnorcross';
	if ($usertype  == 'read')
	{
		$user = 'wbread';
		$pwd = 'tuesday18%';
	}
	elseif ($usertype == 'write')
	{
		$user = 'wbwrite';
		$pwd = 'alias4$';
	}
	else
	{
		exit('Unrecognized connection type');
	}

	if ($connectionType == 'mysqli')
	{
		$result = new mysqli($host, $user, $pwd, $db);
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
