<?php
	Class Items extends CI_Controller {
		public function index(){
			$data["title"] = "Lastest Item";

			$this->load->view('items/index', $data); 
		} 
	}
?>