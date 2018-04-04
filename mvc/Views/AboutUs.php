<h1>About Us</h1>

<?php

//$data = AboutUs::test();
$data = AboutUs::printUsers();

echo "<br> ID  Name  Password  Role<br>";
// Printing objects from an array
foreach( $data as $row ) {
         echo $row['id']."--";
         echo $row['name']."  --";
         echo $row['password']."  ";
         echo $row['role']."  <br>";
}

?>
