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


    <h4>Contractor's Workorder Updated confirmation page</h4>



<form name="form" action="dashboard" method="post">


<fieldset>
    <legend>Updated service request</legend>


    <label id="label00"><b>Date:</b><?php echo $_POST["scheduled"]; ?></label><br><br>

    <label id="label00">Estimate:   <?php echo $_POST["estimate"]; ?></label><br><br>

    <label id="label00">Compleated ?: <?php echo $_POST["compleated"]; ?></label><br><br>

    <label id="label00">Description: <?php echo $_POST["description"]; ?></label><br>

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
