<?php

//The file with the db connection code needs to be included in this file
include "db_connector.php";

$new_joke_question = $_GET["newJoke"];
$new_joke_answer = $_GET["newAnswer"];

//By using the 'addslashes()' method the jokes can be properly inserted into the table with punctuations like apostrophes
$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);

//This SQL statement will search the database for any rows containing the keyword that was searched for.
echo "<h2>The Joke: '" . $new_joke_question . "' has been added to the db</h2>";
echo "<h2>The joke Answer: '" . $new_joke_answer . "' has been added to the db</h2>";

//This statement is used to insert data into the database.  The number at the end represents the user and will need to be edited later
$sql = "INSERT INTO jokes_table (ID, Joke_question, Joke_answer, users_id) VALUES (NULL, '$new_joke_question', '$new_joke_answer', 1)";
//this variable tests the db connection and then querires it for the information saved in the `sql` variable
//The die() method prevents the variable from being added to the table, the 'mysqli_error' method displayes the error of the db connection '$conn'
$result = $conn->query($sql) or die(mysqli_error($conn));

include "search_all_jokes.php"
?>
<a href="index.php">Return to the homepage</a>