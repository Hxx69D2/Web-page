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
			<p><h3>Java Bubble Sort class</h3></p>

			<p>This is a simple demonstration of a Bubble Sort class. It consists of two classes, a tester class and the main sorting class. The sort takes an array of int and returns a sorted array of int.</p>
			
			<p>The zip contains the two java source files.</p>


<div id="code">/**
 * Class Bubblesort - Class to implement a standard bubble sort routine
 *
 * @author Andrew Norcross
 * @version 1.0
 */
 
public class Bubblesort
{
	/**
	 * Bubblesort - sorts data into accending order
	 */
	public int[] sort (int[] sorting)
	{
		Boolean swapped = true;
		int counter = sorting.length;
		int temp;

		while (swapped)
		{
			swapped = false;
			for (int i = 0; i < counter - 1; i++)
			{
				if (sorting[i] > sorting [i + 1])
				{
					temp = sorting[i];
					sorting[i] = sorting[i+1];
					sorting[i+1] = temp;
					swapped = true;
				}
			}
			counter--;
		}

		return sorting;
	}
}</div>

			<p align="center"><font size="4"><img src="images/download_file.png" /><a href="files/Bubblesort_Java_example.zip">Bubble Sort example</a></font></p>

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