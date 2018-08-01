<?php
/**
*   Company class
*/
class Company {

    var $id, $name, $address, $phone, $fax, $email, $website, $description;


    // Constructor
    function __construct($id, $name, $address, $phone, $fax, $email, $website, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->email = $email;
        $this->website = $website;
        $this->description = $description;

    }

    function getName(){
         return $this->name;
      }


}
