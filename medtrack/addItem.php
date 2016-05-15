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

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

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
      <form class="s12 m12 l6" method="post" action="progress.php">
        <fieldset>
          <legend>Add Medicine</legend>
          
          <div class="form-group">
            <label for="prodName" class="control-label col-xs-2">Product Name:</label>
            <div class="col-xs-10">
              <input type="text" name="prodName" id="prodName">
            </div>  
          </div>
          <!-- Label -->
          <div class="form-group">
            <label for="doseNum" class="control-label col-xs-2">Dose:</label>
            <!-- Input -->
            <div class="s12 m3 l2">
              <input type="number" name="doseNum" id="doseNum">
              <select name="select" id="doseVal" required>
                <option value="teaspoons">teaspoons (tsp)</option>
                <option value="drops">drop(s)</option>
                <option value="tablets">tablet(s)</option>
                <option value="puffs">puff(s)</option>
                <option value="milligrams">milligrams(mg)</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="date" class="control-label col-xs-2">Date Started:</label>
            <!-- Input -->
            <div class="col-xs-10">
               <input type="date" name="date" id="date">
            </div>
          </div>
          

          <div class="form-group">
             <label for="status" class="control-label col-xs-2">Status:</label>
            <!-- Input -->
            <div class="">
              <label>
                <input type="checkbox" class="filled-in" name="status" id="status" value="active">Currently Taking
              </label> 
            </div>
              
            
          </div>

          <div class="form-group">
            <label for="durNum" class="control-label col-xs-2">Duration:</label>
            <!-- Input -->
            <div class="col-xs-10">
              <input type="number" name="durNum" id="durNum">
              <select name="durVal" id="durVal" required>
                <option value="days">day(s)</option>
                <option value="weeks">week(s)</option>
                <option value="months">month(s)</option>
                <option value="years">year(s)</option>
              </select>
            </div>
          </div>



          <div class="form-group">
            <label for="prodType" class="control-label col-xs-2">Product Type:</label>
            <!-- Input -->
            <div class="col-xs-10">
              <input type="radio" name="prodType" id="prodType" value="prescription" checked="checked"/>Prescription
              <input type="radio" name="prodType" id="prodType" value="over the counter"/>OTC (Over the Counter)
              <input type="radio" name="prodType" id="prodType" value="supplement" />Supplement 
            </div>
          </div>
          



          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
              <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
            </div>  
          </div>
          
        </fieldset>
      </form>
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
