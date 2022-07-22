<?php

//The file with the db connection code needs to be included in this file
include "db_connector.php";

$keywordfromform = $_GET["keyword"];

//This SQL statement will search the database for any rows containing the keyword that was searched for.
echo "<h2> Show all jokes with the word '" . $keywordfromform . "'</h2>";
$sql = "SELECT id, Joke_Question, Joke_Answer FROM jokes_table WHERE Joke_Question LIKE '%". $keywordfromform . "%'"
     || "SELECT id, first_Name, last_Name FROM employees_table WHERE last_Name LIKE '%" . $keywordfromform . "%'";
//this variable tests the db connection and then querires it for the information saved in the `sql` variable
$result = $conn->query($sql);

//if the table is not empty
if($result->num_rows > 0){
    //the row is selected
    while($row = $result->fetch_assoc()){
        //And a concatenated string is created for each row
        echo "id: " . $row["id"] . " Joke question: " . $row["Joke_Question"] .
        " " . $row["Joke_Answer"] . "<br>";
    }
} else{
    //otherwise this message is displayed to let the user know there are no results
    echo "0 results";
}

?>