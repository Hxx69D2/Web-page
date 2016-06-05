<?php
// set up connection
require_once('./includes/connection.php');
$conn = dbConnect('read');
// get data from database
$sql = "SELECT sect_desc, sect_url
		FROM FP_section";
$result = $conn->query($sql) or die(mysql_error());
$row = $result->fetch_assoc();
?>

<div id="sidebar">
	<ul>
		<li>
			<h2>Welcome</h2>
			<p>This is my web site and an example of my skills.  Please take your time to look round.</p>
		</li>
		<li>
			<h2>About me</h2>
			<ul>
				<li><a href="about.php">Full deatils</a></li>
				<li><a href="files/Andrew_Norcross.doc">My CV</a></li>
			</ul>
		</li>
		<li>
			<h2>Program examples</h2>
			<ul>
				<?php do { ?>
				<li><a href="programming.php#<?php echo $row['sect_url']; ?>"><?php echo $row['sect_desc']; ?></a></li>
				<?php } while ($row = $result->fetch_assoc()); ?>
			</ul>
		</li>
		<li>
			<h2>Contact</h2>
			<ul>
				<li><a href="contact.php">Contact me</a></li>
			</ul>
		</li>
		<li>
			<h2>Around the Internet</h2>
			<ul>
				<li><a href="internet.php">Favourite sites</li>
			</ul>
		</li>
	</ul>
</div>
<!-- end #sidebar -->
