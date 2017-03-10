<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CI_Library {
    
    public function __construct(){
        $CI =& get_instance();
        foreach($CI AS $Key=>$Val){
            $this->{$Key} = $Val;
        }
		log_message('info', 'Library Class Initialized');
    }
}
?>
