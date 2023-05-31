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

        public function get_rooms(){
            return $this->_rooms;
        }

        //setters
        public function set_name($name){
            $this->_name=$name;
        }

        public function set_address($address){
            $this->_address=$address;
        }

        public function set_rooms($rooms){
            $this->_rooms=$rooms;
        }

        //toString() method
        public function __toString(){
            return $this->get_name()." ".$this->get_address();
        }

        //add room method to keep track in array of rooms from hotel
        public function addRoom(Room $room){
           $this->_rooms []= $room;
        }
        
        //show all rooms from a hotel
        public function showRooms(){
            $result = "rooms in this hotel: <br>";
			$rooms = $this->get_rooms();
			foreach($rooms as $room){
				$result .= $room->get_number()."<br>";
			}
			return $result;
        }
       
    }
?>