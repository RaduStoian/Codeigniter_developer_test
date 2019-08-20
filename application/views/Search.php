<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

<div id="container">
	<h1>Search</h1>

	<div id="body">

		<a href="<?php echo base_url() ?>index.php/welcome" class="main_link">Home Page</a>
		<a href="<?php echo base_url() ?>index.php/welcome/addContent" class="main_link">Add Content Page</a>
		<br><br>
		
		<form id="form" action="<?php echo base_url() ?>index.php/welcome/search" method="post">
			<p>Search Movie Name</p>
			<input type="text" name="search" placeholder="Name"  autocomplete="off" class="form_element" onkeyup="showResult(this.value)" id="search" />
			<div id="livesearch"></div>
		</form>



		<table class="tableContainer" id ="table_container" >
			<tr>
				<th class="tableHeader" >Name</th>
				<th class="tableHeader" >Description</th>
			</tr>
		</table>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>



<script>

// get data from database and show in livesearch
const showResult = (query) => {

$.ajax({
	url:"<?php echo base_url(); ?>index.php/welcome/fetch",
	method:"POST",
	data:{query:query},
	success:(data)=> {
		$('#livesearch').html(data);
	}
})
}

// add movie to table upon clicking the suggestion
const addToTable = (query) => {

	// get json data from hidden p tag
	let jsonData = JSON.parse(document.getElementById('jsonData').innerHTML);
	let returnArray = jsonData.result_object;

	// get the proper movie description
	let description = "";
	for (let i = 0, n = returnArray.length; i < n; i++) {
		if (returnArray[i].name == query)
		description = returnArray[i].description;
	}


	let table = document.getElementById('table_container');
	let movieRow = '<tr class="tableRow" ><td class="tableData" >'+query+'</td><td class="tableData">'+description+'</td></tr>'

	// check if movie is already inside table
	if (table.innerHTML.indexOf(query) <= -1) {
		// add movie to table
		table.innerHTML = table.innerHTML + movieRow;
	}
}	
</script>

<style>
/* Style here for the ajax results*/
.result_name{
	cursor:pointer;
	padding:5px;
	background:#eeeeee;
	display:inline-block;
}

.tableContainer{
	text-align:left;
	border-collapse: collapse;
	border:1px solid black;
}
.tableHeader{
	border:1px solid black;
}
.tableData{
	border:1px solid black;
}
</style>

</body>
</html>