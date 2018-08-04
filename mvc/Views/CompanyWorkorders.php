<?php

    ob_start();
    session_start();
?>
<!doctype html>
<html>
 <head>

    <title>Company workorders::</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/styles.css'; ?></style>

</head>
<body id="wrapper">
<?php      include 'header.php'; ?>
<?php      include 'sessionCheck.php'; ?>
<main>
       <h1>Workorders::</h1>

    <h4>Workorders at the current location</h4>
    <?php      include 'Client/ListWorkordersAtLocation.php'; ?>

    <br>
    <h4>All workorders from the company</h4>
        <?php      include 'Client/ListCompanyWorkorders.php'; ?>


<?php      include 'footer.php'; ?>
</main>
</body>
</html>
