<?php

class LocationImpl extends Controller {


    // Returns all locations from database
    public static function listlocations() {

        $data = self::query("SELECT * FROM location");

        return $data;
    }



    //to find all company's locations and information
    public static function findLocationByUserId($userId) {

   $sql = "# Select current location by using the user's id
        SELECT location.*
        FROM location, users, manager
        WHERE	users.id = manager.users_id
	    AND	users.id = '$userId'
        AND	location.id	= manager.location_id;";

        $data = self::query($sql);



        return $data;
    }


}
