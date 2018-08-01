<p>Displays company information.</p>
<table>
        <caption>Company::</caption>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Website</th>
                <th>Description</th>
            </tr>

<?php

    $data = CompanyImpl::findCompanyByUserId($_SESSION['id']);

foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['company_name']."</th>";
            echo "<th>".$row['address']."</th>";
            echo "<th>".$row['phone']."</th>";
            echo "<th>".$row['fax']."</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['website']."</th>";
            echo "<th>".$row['description']."</th>";
            echo "</tr>";

            }

        echo "</table>";



?>
