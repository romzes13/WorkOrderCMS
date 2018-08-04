<p>Displays active notifications at current manager's location.</p>
<table>
        <caption>Notifications::</caption>
            <tr>
                <th>Id</th>
                <th>Active</th>
                <th>Date</th>
                <th>Workorder</th>
                <th>Text</th>
            </tr>

<?php

    // get user id
    $userId = $_SESSION['id'];

    // get list of active notifications at current manager's location
    $data = NotificationImpl::listActiveNotificationsAtLocation($userId);

foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['active']."</th>";
            echo "<th>".$row['upd_date']."</th>";
            echo "<th>".$row['received_wo']."</th>";
            echo "<th>".$row['text']."</th>";
            echo "</tr>";

            }

        echo "</table>";



?>
