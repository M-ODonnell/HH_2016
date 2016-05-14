<html>
<head>
    <title>Creating the - bids - Tables</title>
</head>
<body style="background-color: rgb(195,235,215)">



<?php
// Set the variables for the database access:
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (mysqli_connect_error()) {
    echo("<p class='error'>Failed to connect to database.</p>");
    exit();
}

$Query = "CREATE TABLE meds (
id INT NOT NULL PRIMARY KEY,
name VARCHAR(32) NOT NULL,
dosenum INT NOT NULL,
description VARCHAR(64) NOT NULL,
status BOOLEAN NOT NULL,
durationNum INT NOT NULL,
durationVal varchar(32),
productType VARCHAR(64),


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
