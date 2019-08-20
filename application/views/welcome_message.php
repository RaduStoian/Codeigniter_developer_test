<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Codeigniter | Home </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">

</head>
<body>

<div id="container">
	<h1>Home</h1>

	<div id="body">

		<a href="<?php echo base_url() ?>index.php/welcome/addContent" class="main_link">Add Content Page</a>
		<a href="<?php echo base_url() ?>index.php/welcome/search" class="main_link">Search Page</a>
	
		<br><br>
		<h3>Hello there. These are the most important files.</h3>
		<p><b>/controllers/Welcome.php    (used only the default controller)</b></p>
		<p><b>/views/welcome_message.php (home page)</b></P>
		<p><b>/views/Add_content.php (Add Content Page)</b></P>
		<p><b>/views/Search.php (Search Page)</b></P>
		<p><b>/models/My_model.php</b></P>
		<p><b>/config/config.php , database.php</b></p>

		<h3>Notes:</h3>
		<ul>
			<li>I didn't make the pages beatiful or responsive as I don't think that was part of the test. Only cared for the functionality. What css there is, is to help things be more usable + default css from Codeigniter.</li>
			<li>I didn't use any particular naming conventions or ways to set up the controllers/views/models as I don't know how you guys do things and I'd have to learn your way anyway.</li>
			<li>I didn't use an external js file. Kept all js in the view files so it's easier for you to go through it.</li>
			<li>I used wamp64 as localhost server. my root is "http://localhost/Codeigniter_developer_test/index.php/welcome". You can also use "http://localhost/Codeigniter_developer_test/"
		</ul>

		<br>

		<h4>So yeah, let me know what you think. Everything is working perfectly as I'm writing this.</h4>
		<h4>And let me know if something doesn't work on your end. Maybe I forgot something.</h4>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>



</body>
</html>