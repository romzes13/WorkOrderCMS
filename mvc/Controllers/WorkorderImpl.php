<?php

class WorkorderImpl extends Controller {

    public static function listWorkorders() {

        return (self::query("SELECT * FROM workorder"));

    }

        // Finish it TODO
        public static function contractorWorkordersById($id) {

        return (self::query("SELECT * FROM workorder"));

    }

           // Finish it TODO
        public static function acceptWorkorderById($contractor_id, $workorder_id) {

        // Temporarily $dispatcher = 0
        $dispatcherId = 1;
        //$workorder_id = 1;
            echo "Dispatcher: ".$dispatcherId."<br>";
            echo "Contractor: ".$contractor_id."<br>";
            echo "Workorder: ".$workorder_id."<br>";

      $sql ="INSERT INTO received_wo (dispatcher_id, workorder_id, contractor_id) VALUES ('$dispatcherId', '$workorder_id', '$contractor_id')";

        self::insert($sql);

    }

          // Finish it TODO
        public static function acceptedWorkorders($contractor_id) {

        // Temporarily $dispatcher = 0
        //$dispatcherId = 1;

           // $sql = "SELECT  workorder.*
        //    FROM workorder.received_wo, workorder, contractor
	   //     WHERE received_wo.workorder_id = workorder.id
        //    AND		contractor_id = '$contractor_id';";

            $sql = "SELECT  workorder.*
            FROM workorder.received_wo, workorder, contractor
	        WHERE received_wo.workorder_id = workorder.id
            AND		contractor_id = contractor.id
            AND	    contractor_id = '$contractor_id';";

       return (self::query($sql));

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
