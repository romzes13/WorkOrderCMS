<?php
    ob_start();
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Workorder CMS</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="/mvc/CSS/styles.css"> -->
    <style>
    <?php include 'CSS/newstyle.css'; ?>
    </style>

</head>

<body>
    <title>Workorder CMS</title>
    <div id="wrapper">

        <div class="dashb">
        <?php      include 'header.php'; ?>
        </div>




    <?php
        // Check session first
        if (!isset($_SESSION['name'])) {

            header("Location: login");
        }
            //echo $_SESSION['name'];
    if ($_SESSION['role'] == "admin") {

        echo "<h4>Admin</h4>";
        include 'admin.php';
    }

     if ($_SESSION['role'] == "dispatcher") {

        echo "<h4>Dispatcher</h4>";
         include 'dispatcher_dashboard.php';
    }

     if ($_SESSION['role'] == "client") {

        //echo "<h4>Client</h4>";
         include 'client_newDashboard.php';
    }

        if ($_SESSION['role'] == "contractor") {

        //echo "<h4>Contractor</h4>";
         include 'contractor_newDashboard.php';
    }
 ?>

        <div class="dashb1">
        <h3>WorkOrder CMS >> Breadcrumb here..</h3>
        </div>

    <main>

<?php if($_SESSION['role'] == "contractor") {

    echo "<div class=\"leftcolumn\">";

    echo "<div class=\"m_cont\"><h3>Accepted workorders</h3><hr>";
    //include 'Contractor/AcceptedWorkorders.php';
    echo "</div>";
    //echo "<br>";

    echo "<div class=\"m_cont\"><h3>Available workorders</h3><hr>";
    //include 'Contractor/ListWorkorders.php';
    echo "</div>";
    echo "</div>";
    echo "<br class=\"clear_f\">";
    echo "<div class=\"rightcolumn\">";
    echo "<div class=\"cont_right\"><h3>Contractor info</h3><hr>";
    //include 'Contractor/ContractorInfo.php';
    echo "</div>";
    echo "</div>";





}   else
    if($_SESSION['role'] == "client") {

        echo "<div class=\"cont_right\">
            <h3>Message</h3><hr>
            <p>Workorder details</p>
        </div>";

        include 'Client/DisplayCompanyInfo.php';
        echo "<div>";
        echo "<br>";


        include 'Location/DisplayLocation.php';
        echo "<br>";

        include 'Client/ListLocations.php';
        echo "<br>";
    }
?>


  <?php      include 'footer.php'; ?>

</main>
        </div>
</body>
</html>
