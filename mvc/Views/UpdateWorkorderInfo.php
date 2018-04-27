<?php    session_start();  ?>
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


        <h4>Workorder Update confirmation page</h4>



<form name="form" action="dashboard" method="post" onsubmit="return validateForm()">


<fieldset>
    <legend>Updated service request</legend>



    <label id="label1">Location: <?php echo $_POST["location"]; ?></label><br>

    <label id="label1">Date: <?php echo $_POST["received"]; ?></label><br>

    <label id="label1">Description: <?php echo $_POST["description"]; ?></label><br>

    <br>

</fieldset>
 <br>

            <div id="custom1">

            <input type=submit>
             </div>

        </form>

    <br>
        <?php      include 'footer.php'; ?>

        </main>
</div>
</body>
</html>
