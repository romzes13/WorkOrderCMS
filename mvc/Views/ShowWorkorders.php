<!doctype html>
<html>
 <head>

    <title>All workorders::</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/styles.css'; ?></style>

</head>
<body id="wrapper">


       <h1>Workorders example:</h1>

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
            echo "</tr>";
            }

        echo "</table>";
    ?>









<?php      include 'footer.php'; ?>

</body>
</html>
