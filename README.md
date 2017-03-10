# About
I have prepared all the required and the example files for usage

Use CI Library without $this->CI

Usualy in library everyone is using this code :

public function __construct(){

  $this->CI =& get_instance();
  
}

and after that in library everyone did :

 $this->CI->LibraryName->LibraryFunction();
 
or

$this->CI->LibraryName->LibraryConstant;

to reach other library but with my code you can use it like that :

 $this->LibraryName->LibraryFunction();
 
or

$this->LibraryName->LibraryConstant;

