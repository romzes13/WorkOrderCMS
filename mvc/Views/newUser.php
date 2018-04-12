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



        <h4>You have been succesfully registred!</h4>

    <!-- Form for Help -->
<form >
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

            <input type=button value="  OK  ">

             </div>

        </form>

    <br>
    <?php      include 'footer.php'; ?>

        </main>
</div>
</body>
</html>
