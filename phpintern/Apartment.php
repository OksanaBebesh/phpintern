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
        $this->roomDescription [] = $roomDescription;
    }

    public function remooveRoom(){
        ($this->countRooms !==0 ) ? $this->countRooms-- : $this->countRooms;
    }

    public function getInfo(){
        return [
            'owner' => $this->owner,
            'countRooms' => $this->countRooms,
            'address' => $this->address,
            'roomsDescriptions' => $this->roomDescription
        ];
    }



}