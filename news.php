<?php
// number of news items per page
define('ITEMS', 5);
// set up connection
require_once('./includes/connection.php');
$conn = dbConnect('read');
// gte count of total records to process
$sql = "SELECT COUNT(*) FROM FP_News";
$result = $conn->query($sql);
$row = $result->fetch_row();
$totalItems = $row[0];
// get data from database
$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 0;
$startItem = $curPage * ITEMS;
$sql = "SELECT news_id, poster, news, DATE_FORMAT(date_created, '%D %M %Y') AS date
		FROM FP_News
		ORDER BY news_id DESC
		LIMIT $startItem," . ITEMS;
$result = $conn->query($sql) or die(mysqli_error());
// extract the first record
$row = $result->fetch_assoc();
?>

<!-- report news.  5 items per page from db with forward and back links if necessary -->
<p><h2>News</h2></p>
<?php do { ?>
	<div class="post">
		<p class="meta"><span class="date"><?php echo $row['date']; ?></span><span class="posted">Posted by <a href="#"><?php echo $row['poster']; ?></a></span></p>
		<div style="clear: both;">&nbsp;</div>
		<div class="entry">
			<p><?php echo $row['news']; ?></p>
		</div>
	</div>
<?php } while ($row = $result->fetch_assoc()); ?>

<!-- Add links in a table  -->
<div id="nav">
	<div id="navleft">
		<?php // create link to older entries if necessary
		if ($startItem + ITEMS < $totalItems)
		{
			echo '<a href="' . $_SERVER['PHP_SELF'] . '?curPage=' . ($curpage + 1) . '"> &lt; Older news</a>';
		}
		else
		{
			echo '&nbsp';
		}
		?>
	</div>
	<div id="navright">
		<?php // create link to newer pages if we aren't on page 0
		if ($curPage > 0)
		{
			echo '<a href="' . $_SERVER['PHP_SELF'] . '?curPage=' . ($curPage - 1) . '"> Newer news &gt;</a>';
		}
		else
		{
			echo '&nbsp';
		}
		?>
	</div>
</div>