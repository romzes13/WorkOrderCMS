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

    $user = new User("name1", "1234", "admin");

    $user->getUser();
    echo $user->password."<br>";
    echo $user->role."<br>";

    echo "<br><h5>Find user:</h5>";
    $name = UserImpl::findUser("Roland");



    foreach( $name as $row ) {
             echo $row['id']."--";
             echo $row['name']."  --";
             echo $row['password']."  ";
             echo $row['role']."  <br>";
    }






?>
