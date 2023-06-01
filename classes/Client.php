<?php
    class Client{
        private string $_name;
        private string $_fName;
        private array $_bookings;

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

        public function get_bookings(){
            return $this->_bookings;
        }

        //setters
        public function set_name($name) {
		    $this->_name = $name;
	    }

	
	    public function set_fName($fName) {
		    $this->_fName = $fName;
	    }

        public function set_bookings($bookings){
            $this->_bookings=$bookings;
        }

        public function __toString(){
    		return $this->get_name()." ".$this->get_fName();
        }

        //add booking method to keep track in array of bookings from this client
        public function addBookings(Booking $booking){
            $this->_bookings []= $booking;
        }

        //show all bookings for a room
        public function showBookings(){

            $result = "bookings from ".$this->get_name()." ".$this->get_fName().": <br>";
			$bookings = $this->get_bookings();
			foreach($bookings as $booking){
                $wifi = $booking->get_room()->get_wifi() ? "Yes" : "No";
                
				$result .= $booking->get_room()->get_hotel()->get_name()." / Room : ". $booking->get_room()->get_number()." (".$booking->get_room()->get_price()." - Wifi : ".$wifi.") - from ".$booking->get_startDate()->format("d-M-Y")." till ".$booking->get_endDate()->format("d-M-Y")."<br>";
			}
			return $result;
        }
    }
?>