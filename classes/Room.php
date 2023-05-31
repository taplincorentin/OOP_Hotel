<?php
    class Room {
        private Hotel $_hotel;
        private int $_number;
        private int $_price;
        private bool $_availability;
        private bool $_wifi;
        private array $_bookings;


        //constructor
        function __construct(Hotel $hotel, int $number, int $price, bool $wifi){
            $this->_hotel = $hotel;
            $this->_number = $number;
            $this->_price = $price;
            $this->_availability = true;
            $this->_wifi = $wifi;
            $this->_hotel->addRoom($this);
        }

        //getters
        public function get_hotel(){
            return  $this->_hotel;
        }

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

        public function get_bookings(){
            return $this->_bookings;
        }

        //setters
        public function set_hotel($hotel){
            $this->_hotel = $hotel;
        }

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

        public function set_bookings($bookings){
            $this->_bookings=$bookings;
        }

        // toString method
        public function __toString(){
    		return $this->get_hotel()." ".$this->get_number()." ".$this->get_price()." ".$this->get_availability()." ".$this->get_wifi();
        }

        //add booking method to keep track in array of bookings for this room
        public function addBookings(Booking $booking){
            $this->_bookings []= $booking;
        }
        
        //show all bookings for a room
        public function showBookings(){
            $result = "";
			$bookings = $this->get_bookings();
			foreach($bookings as $booking){
				$result .= $booking->get_client()." - Room ".$booking->get_room()->get_number()." - from ".$booking->get_startDate()->format("d-m-Y")." till ".$booking->get_endDate()->format("d-m-Y")."<br>";
			}
			return $result;
        }
    }
?>