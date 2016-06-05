<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>About Me</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tabs.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="wrapper">
	<?php
	 $location = "about";
	 require("./header.php");
	?>
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="about">
			<!--<p align="center"><font size="4"><img src="images/download_file.png" /><a href="files/Andrew_Norcross.doc">Download CV</a></font></p>-->

			<ol id="toc">
				<li><a href="#profile"><span>Profile</span></a></li>
				<li><a href="#history"><span>Employment History</span></a></li>
				<li><a href="#skills"><span>Skills</span></a></li>
				<li><a href="#education"><span>Training and Education</span></a></li>
			</ol>

			<div class="content" id="profile">
				<?php
				 require("./about_profile.php");
				?>
			</div> <!-- End Profile -->

			<div class="content" id="history">
				<?php
				 require("./about_history.php");
				?>
			</div> <!-- End History -->

			<div class="content" id="skills">
				<?php
				 require("./about_skills.php");
				?>
			</div> <!-- End Skills -->

			<div class="content" id="education">
				<?php
				 require("./about_edu.php");
				?>
			</div> <!-- End Education -->
			<!-- end #about -->
		</div>
		<?php
		 require("./sidebar.php");
		?>
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
</div>
	<?php
	 require("./footer.php");
	 ?>

<script src="scripts/activatables.js" type="text/javascript"></script>
<script type="text/javascript">
activatables('page', ['profile', 'history', 'skills', 'education']);
</script>
</body>