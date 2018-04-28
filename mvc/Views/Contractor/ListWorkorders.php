<p>List of available workorders in the system, where a contractor may accept service calls.</p>

        <table>
        <caption>List of all workorders</caption>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Estimate</th>
                <th>Location</th>
                <th>Received</th>
                <th>Scheduled   </th>
                <th>Compleated</th>
                <th>Location_id</th>
                <th>Accept?</th>
            </tr>
  <?php
            $data = WorkorderImpl::listWorkorders();

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
            echo "<th><a href=\"acceptWorkorder?id=".$row['id']."\">accept wo</a></th>";
            echo "</tr>";
            }

        echo "</table>";
    ?>
