	<div id="header">
		<div id="logo">
			<h1><a href="#">Andrew Norcross</a></h1>
			<p><?php
				require("/home/users/web/b185/ipg.arnorcrosscouk/header_message.php");
			?></p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<?php
			 if ($location == "index")
			 {
				echo "<li class=\"current_page_item\"><a href=\"#\">Home</a></li>";
			 }
			 else
			 {
			 	echo "<li><a href=\"index.php\">Home</a></li>";
			 }
			 
			 if ($location == "about")
			 {
				echo "<li class=\"current_page_item\"><a href=\"#\">About me</a></li>";
			 }
			 else
			 {
			 	echo "<li><a href=\"about.php\">About me</a></li>";
			 }
			 
			 if ($location == "programming")
			 {
				echo "<li class=\"current_page_item\"><a href=\"#\">Programming</a></li>";
			 }
			 else
			 {
			 	echo "<li><a href=\"programming.php\">Programming</a></li>";
			 }
			 
			 if ($location == "contact")
			 {
				echo "<li class=\"current_page_item\"><a href=\"#\">Contact</a></li>";
			 }
			 else
			 {
			 	echo "<li><a href=\"contact.php\">Contact</a></li>";
			 }
			 
			 if ($location == "internet")
			 {
				echo "<li class=\"current_page_item\"><a href=\"#\">Internet</a></li>";
			 }
			 else
			 {
			 	echo "<li><a href=\"internet.php\">Internet</a></li>";
			 }
			?>
		</ul>
	</div>
	<!-- end #menu -->
