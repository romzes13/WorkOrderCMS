<?php

class Workorder extends Controller {

    public static function listWorkorders() {

        print_r(self::query("SELECT * FROM workorder"));

    }

    public static function addWorkorder($description, $estimate, $location, $received,
        $scheduled, $compleated, $location_id) {

        // remove echo statements
        //echo "user: ". $name;
        echo "<br>";
        //echo "password: ".$password;
        echo "<br>";

        //TODO Add security and validate input

$sql ="INSERT INTO workorder (description, estimate, location, received,
        scheduled, compleated, location_id) VALUES ('$description', '$estimate', '$location', '$received', '$scheduled', '$compleated', '$location_id')";


        self::insert($sql);

        //echo $sql;

   //$query = $db->prepare( $sql );
   // $query->execute( array( ':username'=>$name, ':password'=>$password));

    }

}

?>
