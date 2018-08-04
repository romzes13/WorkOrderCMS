<?php

class NotificationImpl extends Controller {


    // Returns all notifications from database
    public static function listNotifications() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM notifications");

        return $data;
    }


    // Returns all active notifications from database
    // for selected company
    // TODO: add new table, where notificaton can be set
    // as seen or not seen, urgent=>send text message to cell.
    public static function listActiveCompanyNotifications($companyId) {

        // Select all active notifications for the company
        $data = self::query("
            SELECT	nt.*
            FROM	notifications nt
            INNER JOIN
		  (SELECT	wo.id
		FROM	workorder wo
		INNER JOIN
		(SELECT	*
		FROM	location
		WHERE	company_id = '$companyId') cc
        ON	wo.location_id = cc.id) cw
        ON	cw.id = nt.received_wo
        WHERE	active='yes'
        ORDER BY nt.received_wo, nt.upd_date;");

        return $data;
    }

     # Final result
     # Select all active notifications for current location
     # based on the manager's user id.
     public static function listActiveNotificationsAtLocation($userId) {

        // Select all active notifications for the company
        $data = self::query("
            SELECT	nt.*
            FROM	notifications nt
            INNER JOIN
		(SELECT	wo.id
		FROM	workorder wo
		INNER JOIN
		(SELECT location.id
		FROM location, users, manager
		WHERE	users.id = manager.users_id
		AND	users.id = '$userId'
		AND	location.id	= manager.location_id) cc
        ON	wo.location_id = cc.id) cw
        ON	cw.id = nt.received_wo
        WHERE	active='yes'
        ORDER BY nt.received_wo, nt.upd_date;");

        return $data;
    }



     // Returns all notifications from database
    public static function listActiveNotif() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM notifications ");

        return $data;
    }


    // Returns latest notifications from database
    public static function addNotifications() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM notifications");

        return $data;
    }

    // Update notification and set id
    public static function setNotification() {

   $sql = "UPDATE notifications SET users_id='8' WHERE id='3'";
        self::insertGetLastId($sql);


    }

    // Update notification with last id from received_wo
    public static function setNotificationText($lastId, $item) {

   $sql = "UPDATE notifications SET text='$item', active='yes'  WHERE id='$lastId'";
        self::insert($sql);


    }

}

?>
