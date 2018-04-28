<?php

    ob_start();
    session_start();
?>
<!doctype html>
<html>
 <head>

    <title>All workorders::</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/styles.css'; ?></style>

</head>
<body id="wrapper">
<?php      include 'header.php'; ?>
<?php      include 'sessionCheck.php'; ?>
<main>
       <h1>Session variables:</h1>

    Session registred for :<?php echo $_SESSION['name'];  ?>  <br>
    and password is: <?php echo $_SESSION['pass']; ?> <br>
    Role: <?php echo $_SESSION['role']; ?>



<?php include 'footer.php'; ?>

</main>
</body>
</html>
