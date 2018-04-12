<!doctype html>
<html>
 <head>

    <title>Contractors::</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include './CSS/styles.css'; ?></style>

</head>
<body id="wrapper">
<?php      include 'header.php'; ?>

       <h1>Contractors example:</h1>

        <table>
        <caption>All contractors::</caption>
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
            $data = ContractorImpl::listContractors();

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


<?php      include 'footer.php'; ?>

</body>
</html>
