<?php

// Set the variables for the database access:
require_once('connectvars.php');
?>


<html>
<head>
    <title>Creating the - bids - Tables</title>
</head>
<body style="background-color: rgb(195,235,215)">



<?php
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_connect_error()) {
    echo("<p class='error'>Failed to connect to database.</p>");
    exit();
}

$Query = "CREATE TABLE meds (
id INT NOT NULL PRIMARY KEY,
name VARCHAR(32) NOT NULL,
dosenum VARCHAR(4) NOT NULL,
doseval VARCHAR(64) NOT NULL,
description VARCHAR(64) NOT NULL,
status VARCHAR(16) NOT NULL,
durationNum VARCHAR(4) NOT NULL,
durationVal VARCHAR(32),
productType VARCHAR(64)
)";

if (mysqli_query ($dbc, $Query)) {
    print ("The query was successfully executed! <br />");
} else {
    print ("The query could not be executed!<br />") . mysqli_error($dbc);
}

mysqli_close ($dbc);
?>



</body>
</html>
