<?php
    class Booking {
        private DateTime $_startDate;
        private DateTime $_endDate;

        //construct method
        function __construct(string $startDate, string $endDate){
            $this->_startDate = new DateTime($startDate);
            $this->_endDate = new DateTime($endDate);
        }

        //getters
        public function get_startDate(){
            return $this->_startDate;
        }

        public function get_endDate(){
            return $this->_endDate;
        }

        //setters
        public function set_startDate($startDate){
            $this->_startDate = $startDate;
        }

        public function set_endDate($endDate){
            $this->_endDate = $endDate;
        }

        //toString method
        public function __toString(){
            return $this->get_startDate()->format("d-m-Y")." ".$this->get_endDate()->format("d-m-Y");
        }
    }
?>