<table>
        <caption>Contractor::</caption>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Rate</th>
                <th>User id</th>
            </tr>

<?php


$data = ContractorImpl::findContractorByUserId($_SESSION['id']);

foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['name']."</th>";
            echo "<th>".$row['address']."</th>";
            echo "<th>".$row['phone']."</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['rate']."</th>";
            echo "<th>".$row['users_id']."</th>";

            echo "</tr>";
            }

        echo "</table>";





?>
