<?php

class NotificationImpl extends Controller {


    // Returns all notifications from database
    public static function listNotifications() {

       // print_r(self::query("SELECT * FROM users"));

        $data = self::query("SELECT * FROM notifications");

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
