<?php
$currentSect = '';
// set up connection
require_once('./includes/connection.php');
$conn = dbConnect('read');
// get data from database
$sql = "SELECT item_desc, item_url, item_long_desc, sect_desc, sect_url, sect_author
		FROM FP_item INNER JOIN FP_section ON FP_item.sect_key = FP_section.sect_id";
$result = $conn->query($sql) or die(mysql_error());
$row = $result->fetch_assoc();
?>

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
		<div id="programming">
			<br /><p>Here are examples of my programming ability.  The section is seperated into sections for different languages and each code example along with comments are on a seperate page.</p>
		<?php do { ?>
		<div id="content">
			<div class="post">
				<?php if ($row['sect_desc'] != $currentSect)
				{
					$currentSect = $row['sect_desc']; ?>
					<p class="meta"><span class="date"><?php echo $row['sect_desc']; ?></span><span class="posted">Posted by <?php echo $row['sect_author']; ?></span><a name="<?php echo $row['sect_url']; ?>"></a></p>
					<div style="clear: both;">&nbsp;</div>
				<?php } ?>
				<div class="entry">
					<p><?php if ($row['item_url']) { ?><a href="<?php echo $row['item_url']; ?>"><?php } ?><?php echo $row['item_desc']; ?></a><p>
					<p class="indent"><?php echo $row['item_long_desc']; ?></p>
				</div>
			</div>
		</div>
		<?php } while ($row = $result->fetch_assoc()); ?>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #programming -->
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
	 require("/home/users/web/b185/ipg.arnorcrosscouk/footer.php");
	 ?>
</body>