<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Content </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">

</head>
<body>

<div id="container">
	<h1>Add Content</h1>

	<div id="body">

		<a href="<?php echo base_url() ?>index.php/welcome/" class="main_link">Home Page</a>
		<a href="<?php echo base_url() ?>index.php/welcome/search" class="main_link">Search Page</a>
		<br><br>



		
		<form action="<?php echo base_url() ?>index.php/welcome/addContent" method="post" id ="form">
			<input type="text" name="name" placeholder="Name" class="form_element" autocomplete="off" id="name"/>
			<br>
			<textarea type="text" name="description" placeholder="description" rows="3" cols="50" class="form_element"id="description"></textarea>
			<br>
			<button type="submit" class="form_element" onclick="validateForm()" >Submit</button>
		</form>

	
	</div>
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<script>

// validate form input and prevent submition if not valid
const validateForm = () => {

	event.preventDefault();
	
	let name = document.getElementById('name').value;
	let description = document.getElementById('description').value;
	let form = document.getElementById('form');
	
	if (name.length == 0) {
		alert("Please enter a valid name");
	}
	else if (description.length == 0) {
		alert("Please enter a valid description");
	}

	else {
		form.submit();
	}
}

</script>



	
</body>
</html>