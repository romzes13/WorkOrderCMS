<?php
/**
*   Contractor class
*/
class Contractor {

    var $id, $name, $address, $phone, $email, $rate, $user_id;


    // Constructor
    function __construct($name, $address, $phone, $fax, $email, $website, $description)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->rate = $rate;
        $this->user_id = $user_id;

    }




}
