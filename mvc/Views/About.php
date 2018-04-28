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
       <h1>Workorder Content Managment System</h1>

 <h3>About the project</h3>

    <p>The primary purpose of WorkOrder CMS is to organize and maintain work orders(service requests), received by maintenance company from clients (retail stores), and dispatch them to contractors. Upon completion of a work order contractor submits a signed worksheet from a manager to the system.</p>

    <p>The system outputs reports such as a list of contractors available and scheduled work orders.
    It maintains up to date information about contractors, work orders, dispatchers, and clients.</p>

    <br><br>

<?php      include 'footer.php'; ?>
</main>
</body>
</html>
