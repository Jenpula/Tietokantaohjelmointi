<?php
include('head.php');
// Get DB connection
require 'db.php';
// Create SQL query to get all rows from a table
$sql = "SELECT * FROM person";
// Execute the query
$people = $pdo->query($sql);
// Check if any was returned


if ( $people->rowCount() > 0 ){
    echo "<ul>";
    // Loop till there are no more rows
    while ( $row = $people->fetch() ) {
        // Echo the data
        echo "<li>" . $row["firstname"] . " " . $row["lastname"]. "</li>";
    }
    echo "</ul>";
}

//Tässä toinen tapa käydä kyselyn tulos läpi:
// foreach($people as $row){
//     echo "<li>" . $row["firstname"] . " " . $row["lastname"]. "</li>";
// }

include('foot.php');
