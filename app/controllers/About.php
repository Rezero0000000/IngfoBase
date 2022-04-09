<?php 
 class About extends Controller {
 	
 	public function index () {
		 $data['title'] = "About";
		 $this->view('layouts/header', $data);
		 $this->view('about/index');
		 $this->view('layouts/footer');
 	}
 }