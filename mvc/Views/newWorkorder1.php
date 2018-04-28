<?php
    ob_start();
    session_start();
?>
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

<?php      include 'header.php'; ?>
<?php      include 'sessionCheck.php'; ?>

    <main>

<?php if($_SESSION['role'] == "contractor") {
    include 'Contractor/ContractorInfo.php';
    echo "<br><br>";
    include 'Contractor/AcceptedWorkorders.php';
    echo "<br><br>";
    include 'Contractor/ListWorkorders.php';
}
?>


        <h4>Your service request has been succesfully submitted!</h4>

    <!-- Form for Help -->
<form >
            <!-- form controlls -->

<fieldset>
    <legend>Workorder details</legend>
<div id="label00">

<label>Description: <?php echo $_POST["description"]; ?></label><br>
<label >Location: <?php echo $_POST["location"]; ?></label><br>
<label >Date: <?php echo $_POST["received"]; ?></label><br>


</div>

</fieldset>

            <div id="custom1">

                <a href="index.php">
                    <input type="button" value="  OK  " />
                </a>
             </div>

        </form>

    <br>
        <?php      include 'footer.php'; ?>

        </main>
</div>
</body>
</html>
