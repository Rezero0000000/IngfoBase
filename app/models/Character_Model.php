<?php 


class Character_Model {
	public function allCharacter() {
		$file = file_get_contents(BASEURL . 'data/indonesian/allCharacter.json');
		$data = json_decode($file, true);
		$data = $data['character'];
		return $data;
	}
}