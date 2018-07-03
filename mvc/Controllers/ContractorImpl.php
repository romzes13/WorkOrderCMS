<?php

class ContractorImpl extends Controller {


    // Returns all contractors from database
    public static function listContractors() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM contractor");

        return $data;
    }

    // Update Contractor and set id
    public static function setContractorId() {

   $sql = "UPDATE contractor SET users_id='8' WHERE id='3'";
        self::insert($sql);


    }

    // Match user to Contractor
    public static function findContractorByUserId($id) {

   $sql = "SELECT * FROM contractor WHERE users_id='$id'";
        $data = self::query($sql);

  /*      echo "Contractor:".var_dump($data);
         foreach( $data as $row ) {

            //echo "name:".$row['name'];
            echo "id: ".$row['id']."<br>";
            echo "name: ".$row['name']."<br>";

        }

 */
        return $data;
    }

     // Find Contractor by Id
    public static function findContractorById($id) {

   $sql = "SELECT * FROM contractor WHERE id='$id'";
        $data = self::query($sql);

        return $data;
    }

}
?>
