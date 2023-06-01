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
        /*public function showRooms(){
            $result = "rooms in this hotel: <br><table> <tr>
            <th>ROOM</th><th>PRICE</th><th>Wifi</th><th>AVAILABILITY</th></tr>";
			$rooms = $this->get_rooms();
			foreach($rooms as $room){
                $wifi = $room->get_wifi() ? "Yes" : "No";
                $availability = $room->get_availability() ? '<font color="green"> Available. </font>' : '<font color="red"> Unavailable </font>';
				$result .= "<tr><td>Room ".$room->get_number()."</td><td>".$room->get_price()." €</td><td>".$wifi."</td><td>".$availability."</td></tr>";
			}
            $result.="</table>";
			return $result;
        }*/
        //better method using php in html
        public function showRooms(){
            $rooms = $this->get_rooms();
            ?>
            
            rooms in this hotel: <br>
            <table> 
                <tr>
                    <th>ROOM</th><th>PRICE</th><th>Wifi</th><th>AVAILABILITY</th>
                </tr> <?php
            foreach($rooms as $room){
                $wifi = $room->get_wifi() ? "📶" : ""; //// utf8 emoji added
                $availability = $room->get_availability() ? '<span style="color:green"> Available </span>' : '<span style="color:red"> Unavailable </span>'; //// span instead of font; style instead of color
                
                 ?>

                <tr>
                    <td>Room <?= $room->get_number() ?></td><td><?= $room->get_price() ?> €</td><td><?= $wifi ?></td><td><?=$availability ?></td>
                </tr>
                <?php
            }
            ?> </table> <?php
            
        }
        


        //Methods to get info about an hotel
        public function totalRooms(){
            return count($this->get_rooms());
        }

        public function nbBookedRooms(){
            $res = 0;
            $rooms=$this->get_rooms();
            foreach($rooms as $room){
                if($room->get_availability()==false){
                    $res++;
                }
            }
            return $res;
        }  
       
        public function getHotelInfo(){
            return $this->get_name()."<br>".$this->get_address()."<br>Number of rooms: ".$this->totalRooms()."<br>Number of booked rooms: ".$this->nbBookedRooms()."<br>Number of available rooms: ".$this->totalRooms()-$this->nbBookedRooms()."<br>";
        }



        //method to show all bookings
        public function showBookedRooms(){
            $res = "";
            $rooms=$this->get_rooms();
            foreach($rooms as $room){
                if($room->get_availability()==false){
                    $res .= $room->showBookings();
                }
            }
            return $res;
        }
    }
?>