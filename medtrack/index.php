<?php

// Set the variables for the database access:
require_once('../db/connectvars.php');
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rx, OTC, & Supplement Tracker</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

    <script src="../js/init.js" type="text/javascript"></script>
  </head>
<body>
  <!-- Add navigation -->
  <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="additem.php">Add Medicine</a></li>
          <li><a href="view.php">View List of Medicines</a></li>
          <li><a href="edit.php">Edit List</a></li>
        </ul>
        <h3 class="text-muted">Medicine Tracker</h3>
      </div>
  
  <div class="jumbotron">
    <?php


    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      if (mysqli_connect_error()) {
          echo '<p>Failed to connect to database.</p>';
          exit();
      } else {

        echo '<p>DB success</p>';
      }

    if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['prodName'];
    $doesenum = $_POST['doseNum'];
    $doeseval = $_POST['doesVal'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $durationNum = $_POST['durationNum'];
    $durationVal = $_POST['durationVal'];
    $productType = $_POST['productType'];

    $query = "INSERT INTO meds ('0', '$name', '$dosenum', '$doeseval', '$description', '$status', '$durationNum', '$durationVal', '$productType') VALUES ('0', '$name', '$dosenum', '$doeseval', '$description', '$status', '$durationNum', '$durationVal', '$productType')";

      if (mysqli_query ($dbc, $query)) {
      print ("The query was successfully executed!");
      } else {
      print ("The query could not be executed!") . mysqli_error($dbc);
      }
    } else {
      echo '<p>Add and item to make a new entry</p>';
    }
      mysqli_close ($dbc);
      ?>
  </div>
  </div>
  </body>

</html>