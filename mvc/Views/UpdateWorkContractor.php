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


<form name="form" action="updateWorkContrInfo" method="post" onsubmit="return validateForm()">
            <!-- form controlls -->
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?> "/>

<fieldset>
    <legend>Update service request</legend>


    <label id="label1">Location:</label><br>
    <label id="label00"><?php echo $workorder->location; ?></label>
    <br/>

    <label id="label1"> Date received: </label><br>
    <label id="label00"><?php echo $workorder->received; ?></label>

   <br/><br>

    <label id="label1"> Scheduled:</label>
     <input type="date" name="scheduled"
           value="<?php echo $workorder->scheduled; ?>">
    <br><br>

     <label id="label1"> location_id:</label>
     <label id="label00"><?php echo $workorder->location_id; ?></label>
    <br><br>

    <label id="label1"> Estimate$:</label>
     <input type="text" name="estimate"
           value="<?php echo $workorder->estimate; ?>">
    <br>

     <label id="label1"> Compleated:</label>



    <select id="custom" name="compleated" >
      <option selected="<?php echo $workorder->compleated; ?>">
          <?php echo $workorder->compleated; ?></option>
            <option value="yes" >yes</option>
            <option value="no" >no</option>

  </select>

    <br><br>
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
