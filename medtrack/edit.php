<!--

// CS 290 -
// Carol D Toro
// toroc@oregonstate.edu
// Spring 2016
// Assignment: Database Interactions & UI
// Filename: workouts.html
// URL: http://52.33.44.25:3001/public/html/workouts.html
//
-->
<!-- Client Side static page -->

<!DOCTYPE html>
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
    <h1>Track My Transition</h1>
  </div>

  <div class="jumbotron">
    <nav>
      <ul>
        <li class="s4 m4" l4><a href="calendar.php">Daily Calendar</a></li>
        <li class="s4 m4" l4><a href="hormone.php">Custom Treatment Plan</a></li>
        <li class="s4 m4" l4><a href="progress.php">My Progress</a></li>
      </ul>
    </nav>
  </div>
  <div class="header">
    <ul class="nav nav-pills pull-right">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="additem.php">Add Medicine</a></li>
      <li><a href="view.php">View List of Medicines</a></li>
      <li><a href="edit.php">Edit List</a></li>
    </ul>
    <h3 class="text-muted">Medicine Tracker</h3>
  </div>
  <!--</div>  -->


  <div class="panel panel-default">
    <div class="panel-body">
     <div class="table-responsive">

      <table id="itemsTable" class="table">
        <caption>Your Supplements/Rx</caption>
        <tr>
          <th class="idTitle">Id</th>
          <th>Name</th>
          <th>Dose</th>
          <th>Date Started</th>
          <th>Status</th>
          <th>Duration</th>
          <th>Product Type</th>
        </tr>
      </table>
    </div>
  </div>


  <!-- Update Status -->
  <div class="panel panel-default">
    <div class="panel-body" id="feedbackArea">
  
      <div id="feedbackContent"> 
      </div>

    </div>
  </div>

</body>
</html>
