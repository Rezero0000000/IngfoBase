<?php 


class Character_Model extends Model {

	public function allCharacter() {
		$file = file_get_contents(BASEURL . 'data/english/allCharacter.json');
		$data = json_decode($file, true);
		$data = $data['character'];
		return $data;
	}

	public function character($id) {
		$file = file_get_contents(BASEURL . 'data/english/allCharacter.json');
		$data = json_decode($file, true);
		$data = $data['character'];

		foreach ($data as $d) {	
			if ($d['id'] == $id) {
				return $d;
			}
		}
	}

	public function getCharacterByElement($element){
		$file = file_get_contents(BASEURL . 'data/english/allCharacter.json');
		$data = json_decode($file, true);
		$data = $data['character'];
		$newData = [];

		foreach ($data as $d) {	
			if ($d['element'] == $element) {
				$newData []= $d;
			}
		}

		return $newData;
	}
	

	public function getCharacterByRegion($region){
		$file = file_get_contents(BASEURL . 'data/english/allCharacter.json');
		$data = json_decode($file, true);
		$data = $data['character'];
		$newData = [];

		foreach ($data as $d) {	
			if ($d['region'] == $region) {
				$newData []= $d;
			}
		}

		return $newData;
	}
	
}