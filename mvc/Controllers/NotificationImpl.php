<?php

class NotificationImpl extends Controller {


    // Returns all notifications from database
    public static function listNotifications() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM notifications");

        return $data;
    }

    // Returns latest notifications from database
    public static function lastNotifications() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM notifications");

        return $data;
    }

    // Update notification and set id
    public static function setNotificationText() {

   $sql = "UPDATE notifications SET users_id='8' WHERE id='3'";
        self::insertGetLastId($sql);


    }

}

?>
