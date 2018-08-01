<?php

class ActivityStream
{
    public static function addNewItem($item)
    {
       // echo "<br> ActivityStream: method addNewItem() called";
        print $item;
    }

    /*
    *   Updates record in database with an $id
    *
    */
    public static function addRecord($lastId, $item)
    {
       //include_once("../Controllers/NotificationImpl.php");
        include '../mvc/Controllers/NotificationImpl.php';
       NotificationImpl::setNotificationText($lastId, $item);
        print $item;
    }
}

?>
