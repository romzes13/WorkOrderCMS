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
