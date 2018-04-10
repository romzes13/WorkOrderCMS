<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Workorder CMS</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="/mvc/CSS/styles.css"> -->
    <style>
    <?php include 'CSS/styles.css'; ?>
    </style>

</head>

<body>
    <div id="wrapper">

        <header><h2>Dashboard::</h2></header>

    <?php
        // Check session first
        if (!isset($_SESSION['name'])) {

            header("Location: login");
        }
            echo $_SESSION['name'];
    if ($_SESSION['role'] == "admin") {

        echo "<h4>Admin</h4>";
        include 'admin.php';
    }

     if ($_SESSION['role'] == "dispatcher") {

        echo "<h4>Dispatcher</h4>";
         include 'dispatcher_dashboard.php';
    }

     if ($_SESSION['role'] == "client") {

        echo "<h4>Client</h4>";
         include 'client_dashboard.php';
    }

        if ($_SESSION['role'] == "contractor") {

        echo "<h4>Contractor</h4>";
         include 'contractor_dashboard.php';
    }
 ?>

    <main>

        <h4>Add menus to dashboard</h4>

<?php if($_SESSION['role'] == "contractor") {
    include 'Contractor/ContractorInfo.php';
}
?>



Session registred for :<?php echo $_SESSION['name'];  ?>  <br>
    and password is: <?php echo $_SESSION['pass']; ?> <br>
    Role: <?php echo $_SESSION['role'];
            echo "<br>Id: ".$_SESSION['id']; ?>


    <br>
 <footer> <small>Copyright &copy; 2018 Roman Babushkin</small></footer>

</main>
        </div>
</body>
</html>
