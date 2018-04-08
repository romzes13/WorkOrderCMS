<?php


    //ob_start();
    session_start();

    //$name = "Roman";
    //$pass = "1234";

   // $_SESSION['name'] = $name;
   // $_SESSION['pass'] = $pass;
?>
<html>
<head>
<title>Test session::</title>

</head>
<body>

Session registred for :<?php echo $_SESSION['name'];  ?>  <br>
    and password is: <?php echo $_SESSION['pass']; ?> <br>
    Role: <?php echo $_SESSION['role']; ?>


 <?php

     //session_start();
   // unset($_SESSION['name']);
   // unset($_SESSION['pass']);

    echo "<h5>cleared session</h5>";

?>



</body>
</html>
