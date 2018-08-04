<p>Displays current location assotiated with a company.</p>
<table>
        <caption>Location::</caption>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Company id</th>
            </tr>

<?php

    $userId = $_SESSION['id'];
    $data = LocationImpl::findLocationByUserId($userId);

foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['name']."</th>";
            echo "<th>".$row['address']."</th>";
            echo "<th>".$row['phone']."</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['company_id']."</th>";
            echo "</tr>";

            }

        echo "</table>";





?>
