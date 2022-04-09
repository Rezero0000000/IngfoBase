<?php 

	class Model {

		public function abort($status){
			require_once('app/views/error/' . $status . '.php');
		}
	}