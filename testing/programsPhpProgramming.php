<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programming Examples</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="wrapper">
	<?php
	 $location = programming;
	 require("/home/users/web/b185/ipg.arnorcrosscouk/header.php");
	?>
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="program">
			<p><h3>PHP/SQL programming page</h3></p>

			<p>This is the source for the programming page. It links in 2 tables in a MySQL database and creates the entry headers and the entry details from the results of the SQL query.</p>
			
			<p>Currently it creates a single page of all the examples.  An alteration if there are too many exmqaples would be to split it up into multiple pages</p>
			
			<p>The zip contains the PHP source file.</p>

			<p align="center"><font size="4"><img src="images/download_file.png" /><a href="files/Php_Programming_example.zip">Programming page example</a></font></p>

		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #program -->
		<?php
		 require("/home/users/web/b185/ipg.arnorcrosscouk/sidebar.php");
		?>
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<?php
	 require("/home/users/web/b185/ipg.arnorcrosscouk/footer.php");
	 ?>
</body>