<?php
    class Client{
        private string $_name;
        private string $_fName;

        //construct method
        function __construct(string $name, string $fName){
            $this->_name = $name;
            $this->_fName = $fName;
        }
        
        //getters
        public function get_name(){
		    return $this->_name;
	    }

        public function get_fName(){
		    return $this->_fName;
	    }

        //setters
        public function set_name($name) {
		    $this->_name = $name;
	    }

	
	    public function set_fName($fName) {
		    $this->_fName = $fName;
	    }

        public function __toString(){
    		return $this->get_name()." ".$this->get_fName();
        }
    }
?>