<?php
/**
*   Client(Company) class
*/
class Client {

    var $id, $name, $address, $phone, $fax, $email, $website, $description;


    // Constructor
    function __construct($name, $address, $phone, $fax, $email, $website, $description)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->email = $email;
        $this->website = $website;
        $this->description = $description;

    }




}
