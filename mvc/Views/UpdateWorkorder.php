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


        <h4>Workorder Update form</h4>

    <!-- Form for update -->
       <h4>* Required fields</h4>
<?php
        echo "GetId=: ".$_GET['id']."<br>";
        $workorder = WorkorderImpl::findWorkorderById($_GET['id']);
      // echo "Workorder: ".$workorder->id;
      //  echo "Workorder: ".$workorder->description;
      //  echo "Workorder: ".$workorder->getWorkorder();
  ?>


<form name="form" action="updateWorkorderInfo" method="post" onsubmit="return validateForm()">
            <!-- form controlls -->
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?> "/>

<fieldset>
    <legend>Update service request</legend>


    <label id="label1">Location</label>

    <input type="text" name="location"
           value="<?php echo $workorder->location; ?>">

           <h8 id="errorLocation" class="error"></h8><br/>

    <label id="label1"> Date:</label>
    <input type="date" name="received"
           value="<?php echo $workorder->received; ?>">

    <h8 id="date" name="date" class="error">*
    <script> getCurrentDate();</script>
    </h8><br/>



    <br>
    <label for="feedback">Description:</label><h8 id="errorDescription" class="error"></h8> <br>
<textarea id="feedback" name="description" rows="4"
          cols="40"><?php echo $workorder->description; ?></textarea>

</fieldset>
 <br>

            <div id="custom1">

            <input type=submit>
            <input type=reset>
             </div>

        </form>

    <br>
        <?php      include 'footer.php'; ?>

        </main>
</div>
</body>
</html>
