<?php
/**
*   Manager class
*/
class Manager {

    var $id, $name, $locationId, $user_id;


    // Constructor
    function __construct($id, $name, $locationId, $user_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->locationId = $locationId;
        $this->user_id = $user_id;

    }

    function getName(){

         return $this->name;
      }


}
