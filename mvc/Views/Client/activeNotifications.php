<p>Displays active notifications.</p>
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

    // get company id
    $company = CompanyImpl::findCompanyByUserId($_SESSION['id']);
    $companyId = '';

    foreach( $company as $row ) {

           $companyId = $row['id'];

            }

    // get list of active notifications for the company
    $data = NotificationImpl::listActiveCompanyNotifications($companyId);

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
