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
<header><h2>New workorder</h2></header>

<nav>
    <b>

    </b>

</nav>

    <main>


        <h4>* Required fields</h4>

    <!-- Form for Help -->
<form action="newWorkorder" method="post">
            <!-- form controlls -->

<fieldset>
    <legend>New service request</legend>

    <label id="label1"> Description:</label>
    <input type="text" name="description"><br/>

    <label id="label1">Estimate</label>
    <input type="text" name="estimate"><br/>

    <label id="label1">Location</label>
    <input type="text" name="location"><br/>

    <label id="label1"> Received:</label>
    <input type="date" name="received"><br/>

    <label id="label1">Scheduled:</label>
    <input type="date" name="scheduled"><br/>

    <label id="label1">Compleated?</label>
     <select id="custom" name="compleated">

            <option value="yes" >yes</option>
            <option value="no" >no</option>

  </select>

    <label id="label1">Location id:</label><br/>
    <input type="text" name="location_id"><br/>

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
