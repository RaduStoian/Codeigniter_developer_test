<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



	// load view on home page
	public function index(){
		$this->load->view('welcome_message');
	}


	// load view for Add Content Page
	public function addContent(){
		$this->load->view('Add_content');

		// get data from form
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description')
		);
		
		// insert new data to database if it's valid
		if (strlen($data['name']) > 0 && strlen($data['description']) > 0){
			$this->my_model->sendData($data);

			// show confirmation on view
			echo ("You have successfully submitted: <br> Name: ".$data['name']. "<br> Description: ".$data['description']);
		}
	}



	// load view for the Search Page
	public function search(){
		$this->load->view('Search');
		
	}

	// load movie names from model function fetch_data and display in livesearch
	public function fetch(){
		$output = "";
		$query = "";
		
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}

		//get data from model
		$data = $this->my_model->fetch_data($query);
		

		if ($data->num_rows() > 0 && $query != ""){
			// return the movie names
			foreach ($data->result() as $row) 
			{
				$output .=' <p class="result_name" onclick="addToTable(this.innerHTML)">'.$row->name.'</p> ';
			}
		}
		// empty results when search box is empty
		elseif ($query == ""){
				$output = "";
		}
		else { // tell user no movie was found
			$output = "<p>No Data Found</p>";
		}
		echo $output;

		// make a hidden p tag with the data in json format in it, later to be used by JS
		echo '<p style="display:none" id="jsonData">'.json_encode($data).'</p>';
	}




}


