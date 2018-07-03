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

        // Notify(update) client and dispatcher
        WorkorderImpl::notifyObserver($contractor_id, $workorder_id, $dispatcherId);

    }


    // Notify client and dispatcher that work order has been accepted
    // Observer pattern
    public static function notifyObserver($contractor_id, $workorder_id, $dispatcherId)
    {

        //Get contractors name
        $contractor = ContractorImpl::findContractorById($contractor_id);
        $contrName = '';

        //echo "<br>Found contractor for id ".$contractor_id." <br>";

        foreach( $contractor as $row ) {

           // echo "id: ".$row['id']."<br>";
           // echo "name: ".$row['name']."<br>";
            $contrName = $row['name'];
           // echo "address".$row['address']."<br>";
           // echo "phone".$row['phone']."<br>";
          //  echo "email".$row['email']."<br>";
          //  echo "rate".$row['rate']."<br>";
          //  echo "users_id".$row['users_id']."<br>";

        }

        //Get workorder details
        $workorder = self::findWorkorderById($workorder_id);

        //echo "<br>Found workorder for id ".$workorder_id." .<br>";

        // Workorder

            echo "Id: ".$workorder->id."<br>";
            echo "Description: ".$workorder->description."<br>";
            echo "Estimate: ".$workorder->estimate."<br>";
            echo "Location: ".$workorder->location."<br>";
            echo "Received: ".$workorder->received."<br>";
            echo "Scheduled: ".$workorder->scheduled."<br>";
            echo "Compleated: ".$workorder->compleated."<br>";
            echo "Location_id: ".$workorder->location_id."<br>";


        //  Notify client
        $title = "Accepted";

        include './classes/Observer/Notification.php';

        $notification = new Notification($title, $workorder->description, $contrName, $workorder->id, $dispatcherId);

        include './classes/Observer/AcceptedWONotifyObserver.php';

        $observer = new AcceptedWONotifyObserver();
        $notification->attachObserver('accepted', $observer);
        $notification->accept();

    }

        // Match user to Contractor
    public static function findContractorByUserId($id) {

   $sql = "SELECT * FROM contractor WHERE users_id='$id'";
        $data = self::query($sql);

        return $data;
    }



      // Cancel accepted work order by contractor
      public static function cancelWorkorderById($id) {

        self::delete("DELETE FROM received_wo WHERE received_wo.workorder_id = '$id'");

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
            FROM received_wo, workorder, contractor
	        WHERE received_wo.workorder_id = workorder.id
            AND		contractor_id = contractor.id
            AND	    contractor_id = '$contractor_id';";

       return (self::query($sql));

    }



    public static function addWorkorder($description, $estimate, $location, $received,
        $scheduled, $compleated, $location_id) {

        if (empty($scheduled)){
             $scheduled = NULL;
            echo "<h2>Empty</h2>";
        }


        //TODO Add security and validate input
/*
$sql ="INSERT INTO workorder (description, estimate, location, received,
        scheduled, compleated, location_id) VALUES ('$description', '$estimate', '$location', '$received', '$scheduled', '$compleated', '$location_id')";
*/

$sql ="INSERT INTO workorder (description, estimate, location, received,
        compleated, location_id) VALUES ('$description', '$estimate', '$location', '$received', '$compleated', '$location_id')";

        self::insert($sql);


   //$query = $db->prepare( $sql );
   // $query->execute( array( ':username'=>$name, ':password'=>$password));

    }


    public static function deleteWorkorder($id) {

        self::delete("DELETE FROM workorder WHERE id = '$id'");

    }

      public static function addWorkorder1($description, $location, $received) {
        // temporary solution for location TODO
        $location_id = 1;

$sql ="INSERT INTO workorder (description, location, received, location_id) VALUES ('$description', '$location', '$received', '$location_id')";

        self::insert($sql);
    }

    // Find workorder by id
    public static function findWorkorderById($id) {

        $data = self::query("SELECT * FROM workorder WHERE id = '$id'");

    foreach( $data as $row ) {

       $workorder = new Workorder($row['id'],$row['description'], $row['estimate'], $row['location'], $row['received'], $row['scheduled'], $row['compleated'], $row['location_id']);

            return $workorder;
    }

    }


    // Update workorder information
    public static function updateWorkorderById($id, $description, $location, $received) {

   $sql = "UPDATE workorder SET description='$description', location='$location', received='$received' WHERE id='$id'";
        self::insert($sql);

    }


    // Update workorder for contractor by id
    public static function updateWorkContrById($id, $description, $estimate, $scheduled, $compleated) {

   $sql = "UPDATE workorder SET description='$description', estimate='$estimate', scheduled='$scheduled', compleated='$compleated' WHERE id='$id'";

        self::insert($sql);

    }


    // Validating clients input
    public static function validate($description, $location, $received) {

        $errorCounter = 0;

if (empty($description = WorkorderImpl::testInput($description)))
    {
            $errorCounter++;
            echo "<h2>No description</h2>";
        }
        if (empty($location = WorkorderImpl::testInput($location))){
             $errorCounter++;
            echo "<h2>Empty location:</h2>".$location;
        }
        if (empty($received = WorkorderImpl::testInput($received))){
             $errorCounter++;
            echo "<h2>Please pick a date:</h2>".$received;
        }

        if ($errorCounter == 0)
            return true;
        else
            return false;

    }

    // trim our data and remove apecial characters
   public function testInput($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
}

}

?>
