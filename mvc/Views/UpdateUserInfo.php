<!DOCTYPE html>
<html lang="en">
<head>
 <title>Workorder CMS</title>
    <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/styles.css'; ?></style>

</head>


<body>
    <div id="wrapper">
<header><h2>User registration page</h2></header>

<nav>
    <b>

    </b>

</nav>

    <main>



        <h4>User information has been succesfully updated!</h4>

    <!-- Form for Help -->
<form action="listUsers">
            <!-- form controlls -->

<fieldset>
    <legend>Name and password</legend>
<div id="label00">
<label>Name: <?php echo $_POST["userName"]; ?></label><br>

<label>Password: <?php echo $_POST["password"]; ?></label><br>
<label >Role: <?php echo $_POST["role"]; ?></label>
</div>

</fieldset>

            <div id="custom1">

            <input type="submit" value="  OK  ">

             </div>

        </form>

    <br>
        <footer> <small>Copyright &copy; 2018 Roman Babushkin</small></footer>

        </main>
</div>
</body>
</html>
