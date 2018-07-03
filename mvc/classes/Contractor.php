<?php
/**
*   Contractor class
*/
class Contractor {

    var $id, $name, $address, $phone, $email, $rate, $user_id;


    // Constructor
    function __construct($name, $address, $phone, $email, $rate, $user_id)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->rate = $rate;
        $this->user_id = $user_id;

    }

    function getName(){
         return $this->name;
      }


}
