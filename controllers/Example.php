<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Example extends My_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('YourLibraryName');
	}
	
	public function Index(){
		$this->load->view('welcome_message');
	}
}
?>
