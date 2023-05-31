<?php
    class Hotel {

        //ATTRIBUTES
        private string $_name;
        private string $_address;
        private array $_rooms;


        //METHODS
        //constructor
        function __construct(string $name, string $address){
            $this->_name=$name;
            $this->_address=$address;
        }

        //getters
        public function get_name(){
            return $this->_name;
        }

        public function get_address(){
            return $this->_address;
        }

        //setters
        public function set_name($name){
            $this->_name=$name;
        }

        public function set_address($address){
            $this->_address=$address;
        }


        //toString() method
        public function __toString(){
            return $this->get_name()." ".$this->get_address();
        }
    }
?>