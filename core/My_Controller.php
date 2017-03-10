<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_Controller extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->Core('Library');
	}
	
	public function Core($Core_Class){
		$this->{$Core_Class} =& load_class($Core_Class,__FUNCTION__);
	}
}
?>
