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
			<p><h3>C# Bubble Sort class</h3></p>

			<p>This is a simple demonstration of a Bubble Sort class.  It takes the form of an overloaded function Sort that requires the array to be sorted and a parameter and an optional parameter to indicate if the sort is to be increasing or decreasing.  The function returns the sorted array.</p>

			<p>I have also included the Visual Studio project folder including a simple program showing how it works.  It creates an array and fills it with a set of random digits and then sorts it.</p>

			<div id="code">    public class BubbleSort
    {
        // Overloaded function to allow sorting with an implied direction
        public int[] sort(params int[] sorting)
        {
            return sort(true, sorting);
        }

        /* Sorting routine, requires at boolean value for ascending or decending
         * and an array of int for the actual values to be sorted */
        public int[] sort(Boolean ascending, params int[] sorting)
        {
            Boolean swapped = false;
            int counter = sorting.Length;
            int temp;

            do
            {
                swapped = false;
                for (int i = 0; i < counter - 1; i++)
                {
                    /* check to see which direction we are sorting in.  There are
                     * more efficient (in terms of code length) ways of doing this
                     * but this is easier to read */
                    if (ascending)
                    {
                        if (sorting[i] > sorting[i + 1])
                        {
                            temp = sorting[i];
                            sorting[i] = sorting[i + 1];
                            sorting[i + 1] = temp;
                            swapped = true;
                        }
                    }
                    else
                    {
                        if (sorting[i] < sorting[i + 1])
                        {
                            temp = sorting[i];
                            sorting[i] = sorting[i + 1];
                            sorting[i + 1] = temp;
                            swapped = true;
                        }
                    }
                }
                counter--;
            } while (swapped);

            return sorting;
        }

    }</div>

			<p align="center"><font size="4"><img src="images/download_file.png" /><a href="files/Bubblesort_CSharp_example.zip">Bubble Sort example</a></font></p>

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