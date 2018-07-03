<?php

class AcceptedWONotifyObserver
{
    public function update(Notification $notification)
    {
        //echo "<br>Inside of AcceptedWONotifyObserver";

        $activity = "Status: {$notification->title} <br>";
        $activity .= "The workorder #{$notification->workorder_id}  accepted by contractor {$notification->contractor_id} on ".date("m/d/Y")." at ".date("h:i:sa")."<br> Work order details: {$notification->work_description}.";

       // $activity .= " and the title .";

        //echo "<br>".$activity;
        include ("ActivityStream.php");
        ActivityStream::addNewItem($activity);

    }
}

?>
