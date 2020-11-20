<?php


class Apartment {
    private $countRooms;
    private $address;
    private $owner;
    private $roomDescription;

    public function __construct( $address, $owner) {
        $this->address=    $address;
        $this->countRooms = 1;
        $this->owner = $owner;
     }

    public function addRoom($roomDescription){
        $this->countRooms ++;
        $this->roomDescription = '';
    }

    public function remooveRoom(){
        ($this->countRooms) ? $this->countRooms-- : $this->countRooms;
    }




}