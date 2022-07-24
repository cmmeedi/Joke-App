<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
      integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
      crossorigin="anonymous"
    ></script>

<!-- This code here is the Stylesheets and CDN for jquery to allow the use of the accordion effect -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!-- It also uses JavaScript to call the accordion function -->
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

    <title>Document</title>
  </head>
  <body>
	
<?php

//The file with the db connection code needs to be included in this file
include "db_connector.php";

$keywordfromform = $_GET["keyword"];

//This SQL statement will search the database for any rows containing the keyword that was searched for.
echo "<h3 class='display-3'> Show all jokes with the word '" . $keywordfromform . "'</h3><hr>";
$sql = "SELECT id, Joke_Question, Joke_Answer FROM jokes_table WHERE Joke_Question LIKE '%". $keywordfromform . "%'";
//this variable tests the db connection and then querires it for the information saved in the `sql` variable
$result = $conn->query($sql);

//if the table is not empty
if($result->num_rows > 0){
   //the row is selected

    ?>
    <!-- PHP portion is closed to allow HTML code to be written -->
    <div class="container pt-3">
    <div class="row">
    <div class="col-10">
    <div id="accordion">
    <?php 
    while($row = $result->fetch_assoc()){
        //And a concatenated string is created for each row
        //The button text
        echo "<h3>". $row["Joke_Question"] . "</h3>";
        //And the text in the dropdown section
        echo "<div><p>". $row["Joke_Answer"] . "</p></div>";  
    }
        }else{
            //otherwise this message is displayed to let the user know there are no results
            echo "0 results";
        }
?>
</div>
</div>
</div>
<a href='index.php'>Go Back Home</a>

	</div>
  </body>
</html>
