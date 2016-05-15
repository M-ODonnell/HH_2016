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

    <style>

        /* Month header */
        .month {
            padding: 70px 25px;
            width: 100%;
            background: #1abc9c;
        }

        /* Month list */
        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        /* Previous button inside month header */
        .month .prev {
            float: left;
            padding-top: 10px;
        }

        /* Next button */
        .month .next {
            float: right;
            padding-top: 10px;
        }

        /* Weekdays (Mon-Sun) */
        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color:#ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        /* Days (1-31) */
        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color:#777;
        }

        /* Highlight the "current" day */
        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }

    </style>
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

            $query = "INSERT INTO meds (id, name, dosenum, doseval, description, status, durationNum, durationVal, productType) VALUES ('0', '$name', '$dosenum', '$doeseval', '$description', '$status', '$durationNum', '$durationVal', '$productType')";

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