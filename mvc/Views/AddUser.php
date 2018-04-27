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
        var erMessage = "Required";
      // Validate form
        function validateForm() {

    var userName = document.forms["form"]["userName"].value;
    var password = document.forms["form"]["password"].value;
    var role = document.forms["form"]["role"].value;
    var total = 2;

        if (userName === "") {

                document.getElementById("errorName").innerHTML = erMessage;
                total--;
                //return false;
            }

            if (password === "") {

                document.getElementById("errorPassw").innerHTML = erMessage;
                total--;
                //return false;

            }

            if (total < 2) {
                return false;
            }
            else
                document.getElementById("errorLocation").innerHTML = "";

    }
    </script>

</head>


<body>
    <div id="wrapper">
        <?php      include 'header.php'; ?>

<h3>User registration page</h3>


    <main>


        <h4>* Required fields</h4>

    <!-- Form for Help -->
<form name="form" action="newUser" method="post" onsubmit="return validateForm()">
            <!-- form controlls -->

<fieldset>
    <legend>Name and password</legend>
<div >
<label id="label1">Name:</label><input name="userName" type="text" >
<h8>*</h8><h8 id="errorName" class="error"></h8>

<label id="label1">Password: </label><input name="password" type="text" > *
<h8 id="errorPassw" class="error"></h8>

<label id="label1">Role: </label><br>

    <select id="custom" name="role">

            <option value="admin" >Admin</option>
            <option value="contractor" >Contractor</option>
            <option value="dispatcher" >Dispatcher</option>
            <option value="client" >Client</option>

  </select>
</div>
</fieldset>

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
