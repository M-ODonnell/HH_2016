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

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

    <style>

        /* Month header */
        .month {
            padding: 50px 25px;
            background: #1abc9c;
            width: 70%; margin: 0 auto;
            min-width: 678px;
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
            width: 70%; margin: 0 auto;
            min-width: 678px;
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
            width: 70%; margin: 0 auto;
            min-width: 678px;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            position: relative;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            top: 2px;
            font-size:12px;
            color:#777;
        }

        /* Highlight the "current" day */
        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }

        @media screen and (min-width: 1240px) {

            .month {width: 90%}
            .weekdays {width: 90%}
            .days {width: 90%}
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
</div>
    <div class="month l4 m10 s12">
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
                May<br>
                <span style="font-size:18px">2016</span>
            </li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Su</li>
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
    </ul>

    <ul class="days">
        <!--<li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>-->
        <li><span class="active">15</span><br />Take your first dose at 4pm</li>
        <li>16</li>
        <li>17<br />Take your second dose at 1am</li>
        <li>18</li>
        <li>19<br />Appt with Dr. Smith at 11am</li>
        <li>20</li>
        <li>21</li>
        <!-- <li>22</li>
         <li>23</li>
         <li>24</li>
         <li>25</li>
         <li>26</li>
         <li>27</li>
         <li>28</li>
         <li>29</li>
         <li>30</li>
         <li>31</li>-->
    </ul>
</div>
</body>

</html>