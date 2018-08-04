<p>List of workorders at the current location.</p>

        <table>
        <caption>List of workorders at the current location</caption>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Estimate</th>
                <th>Location</th>
                <th>Received</th>
                <th>Scheduled   </th>
                <th>Compleated</th>
                <th>Location_id</th>
            </tr>
  <?php

            $userId = $_SESSION['id'];
            $data = WorkorderImpl::listWorkordersAtLocation($userId);

            foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['description']."</th>";
            echo "<th>".$row['estimate']."</th>";
            echo "<th>".$row['location']."</th>";
            echo "<th>".$row['received']."</th>";
            echo "<th>".$row['scheduled']."</th>";
            echo "<th>".$row['compleated']."</th>";
            echo "<th>".$row['location_id']."</th>";
            }

        echo "</table>";
    ?>
