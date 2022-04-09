<?php 
	
	class Character extends Controller {
		public function index () {
			 $data['title'] = "Character";
			 $data['character'] = $this->model('Character_Model')->allCharacter();
			 $this->view('layouts/header',$data);
			 $this->view('Character/index', $data);
			 $this->view('layouts/footer');
		}

		public function detail ($id) {
			$character = $this->model('Character_Model')->character($id);
			if ($character !== null) {
				 $data['title'] = 'Detail Character';
				 $data['character'] = $character;
				 $this->view('layouts/header',$data);
				 $this->view('Character/detail', $data);
				 $this->view('layouts/footer');
			}else {
				 $this->abort(403);

			}

		}

		public function element ($element) {
			 $data['title'] = "Character";
			 $data['character'] = $this->model('Character_Model')->getCharacterByElement($element);
			 $this->view('layouts/header',$data);
			 $this->view('Character/index', $data);
			 $this->view('layouts/footer');
		}

		public function region ($region) {
			 $data['title'] = "Character";
			 $data['character'] = $this->model('Character_Model')->getCharacterByRegion($region);
			 $this->view('layouts/header',$data);
			 $this->view('Character/index', $data);
			 $this->view('layouts/footer');
		}
	}