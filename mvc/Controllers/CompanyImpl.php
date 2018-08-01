<?php

class CompanyImpl extends Controller {


    // Returns all company's from database
    public static function listCompanys() {

        $data = self::query("SELECT * FROM company");

        return $data;
    }


    // Find a company with the matching id
    public static function findCompanyById($id) {

   $sql = "SELECT * FROM company WHERE id='$id'";

        $data = self::query($sql);

         foreach( $data as $row ) {

            $company = new Company($row['id'], $row['company_name'], $row['address'], $row['phone'], $row['fax'], $row['email'], $row['website'], $row['description']);

        return $data;
    }

        return null;
    }

      // Find a company by user id
    public static function findCompanyByUserId($id) {

   $sql = "#	Select and return company id from location table
        SELECT	company_id, location.name, address
        FROM	location, users, manager
        WHERE	users.id = manager.users_id
	   AND	users_id = '$id'
	   AND	location.id	= manager.location_id;";

        $data = self::query($sql);

         foreach( $data as $row ) {

            //$company = new Company($row['id'], $row['company_name'], $row['address'], $row['phone'], $row['fax'], $row['email'], $row['website'], $row['description']);

        return self::findCompanyById($row['company_id']);
    }

        return null;
    }



}
