<p>Here's the list of scheduled workorders by a contractor. It can be empty if a contractor hasn't accepted any service calls yet.</p>

        <table>
        <caption>Scheduled workorders</caption>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Estimate</th>
                <th>Location</th>
                <th>Received</th>
                <th>Scheduled   </th>
                <th>Compleated</th>
                <th>Location_id</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
  <?php
           // session_start();
            $data = WorkorderImpl::acceptedWorkorders($_SESSION['contractor_id']);

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
echo "<th><a href=\"updateWorkContractor?id=".$row['id']."\">update</a></th>";
echo "<th><a href=\"cancelWorkorder?id=".$row['id']."\">cancel</a></th>";
            echo "</tr>";
            }

        echo "</table>";
    ?>
