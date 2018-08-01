<?php

class ManagerImpl extends Controller {


    // Returns all managers from database
    public static function listManagers() {

        $data = self::query("SELECT * FROM manager");

        return $data;
    }



    // Match user to Manager
    // If no manager found return NULL
    public static function findManagerByUserId($id) {

   $sql = "SELECT * FROM manager WHERE users_id='$id'";

        $data = self::query($sql);

         foreach( $data as $row ) {

            $manager = new Manager($row['id'], $row['name'], $row['location_id'], $row['users_id']);


        return $manager;
    }

        return null;
    }


    // Find all company's locations
    public static function findLocationsByUserId($id) {

   $sql = "SELECT	ll.id, ll.name, ll.address
            FROM	location ll
            INNER JOIN
		(SELECT	company_id, location.name, address
		FROM	location, users, manager
		WHERE	users.id = manager.users_id
		AND	users_id = '$id'
		AND	location.id	= manager.location_id) al
        ON	ll.company_id = al.company_id";

        $data = self::query($sql);



        return $data;
    }

    // Overriden Method
    //to find all company's locations and information
    public static function listLocationsByUserId($id) {

   $sql = "SELECT	ll.id, ll.name, ll.address, ll.phone, ll.email, ll.company_id
            FROM	location ll
            INNER JOIN
		(SELECT	company_id, location.name, address
		FROM	location, users, manager
		WHERE	users.id = manager.users_id
		AND	users_id = '$id'
		AND	location.id	= manager.location_id) al
        ON	ll.company_id = al.company_id";

        $data = self::query($sql);



        return $data;
    }


}
