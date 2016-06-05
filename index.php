<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Andrew Norcross</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="wrapper">
	<?php
	 $location = index;
	 require("./header.php");
	?>
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<p><h2>Welcome to my web site</h2></p>
			<p>I am an experienced programmer and web designer with over 10 years experience in the IT industry. I am looking for a new position either as a developer, preferably in C# or Java, or as a web designer in the London or Thames valley regions.</p>

			<p>The 'About Me' page contains an expanded version of my CV.  It goes into greater depth on my more recent jobs and gives details of earlier jobs, where I gained my experience of my languages from and my eduaction.  You can also download the latest version of my CV, either from the sidebar ot from the About Me page.</p>

			<p>The 'Programming' pages gives examples of my skills.  This section will be a work in progress as I will be adding new examples on a continuing basis.</p>
			
			<p>The 'Contact' page gives contact details or a form you can use to contact me.</p>
			
			<p>Finally the 'Internet' page gives links to a few of the pages on the internet that I find interesting.</p>

			<?php
			 require("./news.php");
			?>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
		 require("./sidebar.php");
		?>
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<?php
	 require("./footer.php");
	 ?>
</body>
</html>
