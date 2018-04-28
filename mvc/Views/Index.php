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
<main>
        <?php      include 'header.php'; ?>

    <nav>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="about-us">about us</a></li>
        <li><a href="login">Login</a></li>
        <li><a href="addUser">Sign up</a></li>
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="logout">User logout</a></li>
    </ul>

</nav>

<h3>Welcome to Workorder CMS!</h3>
        <p>Please login using the form located below or  <a href="http://localhost/mvc/addUser">click here</a> to register if you are a new user.</p>


<?php      include 'login.php'; ?>

        <br><br>
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
