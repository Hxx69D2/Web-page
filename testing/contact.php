<?php
require_once('./includes/recaptchalib.php');
require_once('./includes/keys.php');

$errors = array();
$missing = array();

// Check if the form has been submitted
if (isset($_POST['send']))
{
	// email procesing script
	$to = 'andrewrnorcross@gmail.com';
	$subject = 'Feedback web site';
	// list expected fields
	$expected = array('name', 'email', 'comments');
	// list required fields
	$required = array('name', 'email', 'comments');
	// create additional headers
	$headers = "From: Web site<andrew@arnorcross.co.uk>\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	$response = recaptcha_check_answer($private_key, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);
	if (!$response->is_valid)
	{
		$errors['recaptcha'] = true;
	}
	require('./includes/processmail.inc.php');
	if ($mailsent)
	{
		header('Location: http://www.arnorcross.co.uk/thank_you.php');
		exit;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="wrapper">
	<?php
	 $location = contact;
	 require("./header.php");
	?>
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="contact">
			<p>To contact me by email my address is andrewrnorcross at gmail dot com or use the form below.</p>
			<p>For phone and physical address details, please see my CV.</p><hr />
			
			<?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
				<p class="warning">Sorry, your email couldn't be sent.  Please try again later.</p>
			<?php } elseif ($missing || $errors) {?>
				<p class="warning">Please fix the items indicated.</p>
			<?php } ?>
			<form id="feedback" method="post" action="" />
				<p>
                <label for="name">Name:
				<?php if ($missing && in_array('name', $missing)) { ?>
					<span class="warning">Please enter your name</span>
				<?php } ?>
				</label>
                <input name="name" id="name" type="text" class="formbox"
				<?php if ($missing || $errors)
				{
					echo 'value="' .htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';
				}
				?> />
            </p>
            <p>
                <label for="email">Email:
				<?php if ($missing && in_array('email', $missing)) { ?>
					<span class="warning">Please enter your email</span>
				<?php } elseif (isset($errors['email'])) {?>
					<span class="warning">Invalid email address</span>
				<?php } ?>
				</label>
                <input name="email" id="email" type="text" class="formbox"
				<?php if ($missing || $errors)
				{
					echo 'value="' .htmlentities($email, ENT_COMPAT, 'UTF-8') . '"';
				}
				?> />
            </p>
            <p>
                <label for="comments">Comments:
				<?php if ($missing && in_array('comments', $missing)) { ?>
					<span class="warning">Please enter your comments</span>
				<?php } ?>
				</label>
                <textarea name="comments" id="comments" cols="60" rows="8"><?php 
				if ($missing || $errors)
				{
					echo htmlentities($comments, ENT_COMPAT, 'UTF-8');
				}
				?></textarea>
            </p>
            <?php if (isset($errors['recaptcha'])) { ?>
				<p class="warning">The values Don't match. Try again.</p>
			<?php }
			echo recaptcha_get_html($public_key); ?>
			<p>
                <input name="send" id="send" type="submit" value="Send message" />
            </p>
			</form>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #contact -->
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