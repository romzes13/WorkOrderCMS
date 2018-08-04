<?php

    ob_start();
    session_start();
?>
<!doctype html>
<html>
 <head>

    <title>Company notifications::</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/styles.css'; ?></style>

</head>
<body id="wrapper">
<?php      include 'header.php'; ?>
<?php      include 'sessionCheck.php'; ?>
<main>
       <h1>Notifications::</h1>

    <h4>Notifications at the current location</h4>
        <?php      include 'Client/activeLocationNotifications.php'; ?>
    <br>
    <h4>Company's notifications</h4>
    <?php      include 'Client/activeNotifications.php'; ?>

<?php      include 'footer.php'; ?>
</main>
</body>
</html>
