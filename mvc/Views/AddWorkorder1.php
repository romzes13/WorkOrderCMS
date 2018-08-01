<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Workorder CMS</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="/mvc/CSS/styles.css"> -->
    <style>
    <?php include 'CSS/styles.css'; ?>
    </style>

    <!-- JavaScript code to validate form -->
    <script>


        // global variable
        var erMessage = "This field is required";


      // Validate form
        function validateForm() {

            var total = 0;

    var location = document.forms["form"]["location"].value;
    var description = document.forms["form"]["description"].value;
   //var estimate = document.forms["form"]["estimate"].value;

            // check if location is empty
        if (location == "") {

                document.getElementById("errorLocation").innerHTML = erMessage;
                total++;
                //return false;

            } else
                document.getElementById("errorLocation").innerHTML = "";

            // check if description is empty
            if (description == "") {

                document.getElementById("errorDescription").innerHTML = erMessage;
                total++;
                //return false;

            }   else
                document.getElementById("errorDescription").innerHTML = "";

            if (!total == 0) {
                    return false;
            }
                else return true;
    }

    // Get current date
    function getCurrentDate() {
        var currentDate = new Date();
        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();

return  document.write("<b>" +month + "/" + day + "/" + year + "</b>");
    }



    </script>

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

   <?php

        echo "Session id: ".$_SESSION['id']."<br>";
        //include '../mvc/Client/Client.php';
        include 'Client/Client.php';

    /*    foreach( $locations as $row ) {

            echo "Id: ".$row['id']."<br>";
            echo "Name: ".$row['name']."<br>";
            echo "Address: ".$row['address']."<br>";

            }
      */

    ?>

        <h4>* Required fields</h4>

    <!-- Form for Help -->
<form name="form" action="newWorkorder1" method="post" onsubmit="return validateForm()">
            <!-- form controlls -->

<fieldset>
    <legend>New service request</legend>

    <label id="label1">LocationId</label>
    <input type="text" name="locationId" value="<?php echo $manager->locationId; ?>"><br>

    <label id="label1">Location</label>
    <select id="custom" name="location" >
      <option selected="<?php echo $manager->locationId; ?>"><?php echo $manager->locationId; ?></option>

        <?php
         foreach( $locations as $row ) {

            echo "<option value=".$row['id']." >".$row['name'].": ".$row['address']."</option>";

            }
    ?>

  </select>
    <br>

    <label id="label1">Location</label>
    <input type="text" name="location1" value="<?php echo $manager->name; ?>"><h8 id="errorLocation" class="error"></h8><br/>

    <label id="label1"> Date:</label>
    <input type="date" name="received"><h8 id="date" name="date" class="error">*
    <script> getCurrentDate();</script>
    </h8><br/>



    <br>
    <label for="feedback">Description:</label><h8 id="errorDescription" class="error"></h8> <br>
<textarea id="feedback" name="description" rows="4" cols="40"></textarea>

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
