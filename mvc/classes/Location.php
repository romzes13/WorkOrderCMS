<?php
/**
*   Location class
*/
class Location {

    var $id, $name, $address, $phone, $email, $company_id;


    // Constructor
    function __construct($id, $name, $address, $phone, $email, $company_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->company_id = $company_id;

    }

    function getName(){

         return $this->name;
      }


}
