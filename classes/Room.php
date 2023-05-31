<?php
    class Room {
        private int $_number;
        private int $_price;
        private bool $_availability;
        private bool $_wifi;


        //constructor
        function __construct(int $number, int $price, bool $availability, bool $wifi){
            $this->_number = $number;
            $this->_price = $price;
            $this->_availability = $availability;
            $this->_wifi = $wifi;
        }

        //getters
        public function get_number() {
            return $this->_number;
        }

        public function get_price() {
            return $this->_price;
        }

        public function get_availability() {
            return $this->_availability;
        }

        public function get_wifi() {
            return $this->_wifi;
        }

        //setters
        public function set_number($number){
            $this->_number = $number;
        }

        public function set_price($price){
            $this->_price = $price;
        }

        public function set_availability($availability){
            $this->_availability = $availability;
        }

        public function set_wifi($wifi){
            $this->_wifi = $wifi;
        }

        // toString method
        public function __toString(){
    		return $this->get_number()." ".$this->get_price()." ".$this->get_availability()." ".$this->get_wifi();
        }
    }
?>