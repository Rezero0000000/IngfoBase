<?php 
	
	class Character extends Controller {
		public function index () {
			 $data['title'] = "Character";
			 $data['character'] = $this->model('Character_Model')->allCharacter();
			 $this->view('layouts/header',$data);
			 $this->view('Character/index', $data);
			 $this->view('layouts/footer');

		}
	}