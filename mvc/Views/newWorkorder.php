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
<header><h2>Workorder page</h2></header>

<nav>
    <b>

    </b>

</nav>

    <main>



        <h4>Your service request has been succesfully submitted!</h4>

    <!-- Form for Help -->
<form >
            <!-- form controlls -->

<fieldset>
    <legend>Workorder details</legend>
<div id="label00">

<label>Description: <?php echo $_POST["description"]; ?></label><br>
<label>Estimate: <?php echo $_POST["estimate"]; ?></label><br>
<label >Location: <?php echo $_POST["location"]; ?></label><br>
<label >Received: <?php echo $_POST["received"]; ?></label><br>
<label >Scheduled: <?php echo $_POST["scheduled"]; ?></label><br>
<label >Compleated: <?php echo $_POST["compleated"]; ?></label><br>
<label >Location_id: <?php echo $_POST["location_id"]; ?></label><br>


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
