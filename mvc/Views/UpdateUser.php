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
<header><h2>Update user information page</h2></header>

<nav>
    <b>

    </b>

</nav>

    <main>


        <h4>* Required fields</h4>
<?php
        echo "GetId=: ".$_GET['id']."<br>";
        $user = UserImpl::findUserById($_GET['id']);
        echo "User: ".$user->name;
        echo "User name".$user->getName();
  ?>

        <!-- Form for Help -->
<form action="updateUserInfo" method="post">
            <!-- form controlls -->
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?> "/>
<fieldset>
    <legend>Update your name and password</legend>
<div >
<label id="label1">Name:</label><input name="userName" type="text" value="<?php echo $user->name; ?>" >
<h8>*</h8><h8 id="errorName" class="error"></h8>

<label id="label1">Password: </label><input name="password" type="text" value="<?php echo $user->password; ?>" > *
<h8 id="errorPassw" class="error"></h8>

<label id="label1">Role: </label><br>

<select id="custom" name="role" >
      <option selected="<?php echo $user->role; ?>"><?php echo $user->role; ?></option>
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
