<?php

class WorkorderImpl extends Controller {

    public static function listWorkorders() {

        return (self::query("SELECT * FROM workorder"));

    }

        // Finish it TODO
        public static function contractorWorkordersById($id) {

        return (self::query("SELECT * FROM workorder"));

    }



    public static function addWorkorder($description, $estimate, $location, $received,
        $scheduled, $compleated, $location_id) {


        //TODO Add security and validate input

$sql ="INSERT INTO workorder (description, estimate, location, received,
        scheduled, compleated, location_id) VALUES ('$description', '$estimate', '$location', '$received', '$scheduled', '$compleated', '$location_id')";

        self::insert($sql);


   //$query = $db->prepare( $sql );
   // $query->execute( array( ':username'=>$name, ':password'=>$password));

    }

}

?>
