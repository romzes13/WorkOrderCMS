<!doctype html>
<html>
 <head>

    <title>Users::</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/styles.css'; ?></style>

</head>
<body id="wrapper">


       <h1>Users example:</h1>

        <table>
        <caption>List of all users::</caption>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Role</th>
                <th>Update id</th>
                <th>Delete</th>
            </tr>
  <?php
            $data = UserImpl::listUsers();

            foreach( $data as $row ) {

            echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['name']."</th>";
            echo "<th>".$row['password']."</th>";
            echo "<th>".$row['role']."</th>";
echo "<th><a href=\"updateUser?id=".$row['id']."\">update id</a></th>";
echo "<th><a href=\"deleteUser?id=".$row['id']."\">delete id</a></th>";
            echo "</tr>";
            }

        echo "</table>";

    ?>




</body>
</html>
