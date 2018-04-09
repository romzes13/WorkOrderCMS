<!DOCTYPE html>
<html lang="en">
<head>
 <title>Workorder CMS</title>
    <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="/mvc/CSS/styles.css"> -->
    <style>
    <?php include 'CSS/styles.css'; ?>
    </style>

</head>


<body>
    <div id="wrapper">
<header><h2>User registration page</h2></header>

<nav>
    <b>

    </b>

</nav>

    <main>


        <h4>* Required fields</h4>

    <!-- Form for Help -->
<form action="newUser" method="post">
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
        <footer> <small>Copyright &copy; 2018 Roman Babushkin</small></footer>

        </main>
</div>
</body>
</html>
