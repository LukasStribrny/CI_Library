<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class YourLibraryName extends CI_Library {
	
	public function __construct(){
		parent::__construct();
		$this->Fun_Name();
	}
	
	public function Fun_Name(){
		//Do something or anything
		echo __CLASS__ .'::' . __FUNCTION__ .'->'." It's working!";
	}
}
?>
