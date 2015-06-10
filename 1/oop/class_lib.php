<?php           

//klasa osoba
class osoba {  
        
	var $ime;              

        function __construct($ime_osobe) {           
              	$this->ime = $ime_osobe;            
        }               
                
        function set_ime($novo_ime) {          
        	$this->ime = strtoupper($novo_ime);
        }       

        function get_ime() {
              	return $this->ime;
        }    
                                                
}

//klasa zaposleni sadrzi objekte klase osoba
class zaposleni extends osoba {
	       
	function __construct($ime_zaposlenog){
		$this->set_ime($ime_zaposlenog);
                //parent::set_ime($ime_zaposlenog);	
        }

} 

//klasa templejta
class View extends zaposleni {


     	public function render($script) {
        	ob_start();
        	$this->_include($script);
        	return ob_get_clean();
    	}
 
    	public function __get($key) {
    		return (isset($this -> $key) ? $this -> $key : null);
    	}
 
    	protected function _include() {
        	include func_get_arg(0);
    	}
}

?>               
