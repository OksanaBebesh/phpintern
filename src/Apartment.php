<?php


class Apartment {
    private $countRooms;
    private $address;
    private $owner;
    private $roomDescription;

    public function __construct( $add, $own) {
        $this->address=$add;
        $this->countRooms = 1;
        $this->owner = $own;
     }

    public function addRoom($roomDescription){
        $this->countRooms ++;
        $this->roomDescription[] = $roomDescription;
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