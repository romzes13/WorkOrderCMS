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
        <?php      include 'header.php'; ?>



    <main>
<h3>About us</h3>

    <p>The primary purpose of WorkOrder CMS is to organize and maintain work orders(service requests), received by maintenance company from clients (retail stores), and dispatch them to contractors. Upon completion of a work order contractor submits a signed worksheet from a manager to the system.</p>

    <p>The system outputs reports like a list of contractors available and scheduled work orders.
    It maintains up to date information about contractors, work orders, dispatchers, and clients.</p>

<a href="">Home</a><br>
<a href="about-us">about us</a><br>
<a href="login">User login</a><br>
<a href="loginTest">Current session details</a><br>
<a href="logout">User logout</a><br>
<a href="dashboard">Dashboard</a><br>
<a href="addUser">Add user</a><br>
<a href="listUsers">Display all users</a><br>
<a href="addWorkorder">Add workorder</a><br>
<a href="listWorkorders">Display all workorders</a><br>



    <br>
        <?php      include 'footer.php'; ?>

        </main>
</div>
</body>
</html>
