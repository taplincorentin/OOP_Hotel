<?php
    class Booking {
        private Client $_client;
        private Room $_room;
        private DateTime $_startDate;
        private DateTime $_endDate;

        //construct method
        function __construct(Client $client,Room $room, string $startDate, string $endDate){
            $this->_client = $client;
            $this->_room = $room;
            $this->_startDate = new DateTime($startDate);
            $this->_endDate = new DateTime($endDate);
            $this->_client->addBookings($this);
            $this->_room->addBookings($this);
            $this->_room->set_availability(false);
        }

        //getters
        public function get_client(){
            return $this->_client;
        }

        public function get_room(){
            return $this->_room;
        }

        public function get_startDate(){
            return $this->_startDate;
        }

        public function get_endDate(){
            return $this->_endDate;
        }

        //setters
        public function set_client($client){
            $this->_client = $client;
        }

        public function set_room($room){
            $this->_room = $room;
        }

        public function set_startDate($startDate){
            $this->_startDate = $startDate;
        }

        public function set_endDate($endDate){
            $this->_endDate = $endDate;
        }

        //toString method
        public function __toString(){
            return $this->get_client()." - Room ".$this->get_room()->get_number()." - from".$this->get_startDate()->format("d-m-Y")." till ".$this->get_endDate()->format("d-m-Y");
        }
    }
?>