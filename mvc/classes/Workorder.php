<?php
/**
*   Workorder class
*
*  $sql ="INSERT INTO workorder (description, estimate, location, received,
*    compleated, location_id) VALUES ('$description', '$estimate', '$location', *    '$received', '$compleated', '$location_id')";
*
*
*
*/
class Workorder {

    var $id, $description, $estimate, $location, $received, $compleated, $location_id;



    // Constructor
    function __construct($id, $description, $estimate, $location, $received, $compleated, $location_id)

    {
        $this->id = $id;
        $this->description = $description;
        $this->estimate = $estimate;
        $this->location = $location;
        $this->received = $received;
        $this->compleated = $compleated;
        $this->location_id = $location_id;


    }

    function getWorkorder(){
         echo $this->description."<br/>";
      }

    function getDescription(){
         echo $this->description;
      }




/** Commented

    // Magic setter
    public function __set($name, $password, $role)
    {
        $this->$name = $name;
        $this->$password = $password;
        $this->$role = $role;

    }

    // Magic getter
    public function __get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }
 */

}

?>
