<html>

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
    <link rel="stylesheet" href="styles.css"/>

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

    <title>Jokes App</title>
  </head>
<body>

<h1 class="display-1 text-center">Jokes App</h1>
<hr>

<?php 

//This includes the code to be able to connect to the DB
include "db_connector.php";
//This includes the code to be able to search and display all the jokes in the DB

?>
<!-- This is the form to allow the user to search for keywords to pull up jokes containing those keywords within the db -->
    <div id="keywordSearch" class="container mt-0">
      <form action="search_keyword.php">
        <div class="form-group">
          <label for="keyword" class="display-4"> Keyword Search </label>
          <input
            type="text"
            class="form-control col-4"
            id="keyword"
            name="keyword"
            aria-describedby="keywordSearch"
          />
          <small id="keywordHelp" class="form-text text-muted"
            >Enter the keyword you would like to search</small
          >
        </div>
        
        <div class="row">
       	<div class="col-3">
        <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <div class="col-4">
                  <a href="search_all_jokes.php" class="col-3"> Veiw all jokes</a>
        </div>
        </div>
      </form>
    </div>

<hr>

<!-- This is the form to allow the user to add a joke with an answer -->
    <div id="new_Joke" class="container">
        <form action="new_Joke.php">
        
          <div class="form-group">
            <label for="newJoke" class="display-4">Add a Joke</label>
            <br>
            <label for="newJoke"> First half of joke </label>
            <input
              type="text"
              class="form-control col-4"
              id="newJoke"
              name="newJoke"
              aria-describedby="newJoke"
            />
            
            <label for="newAnswer"> Add a Joke </label>
            <input
              type="text"
              class="form-control col-4"
              id="newAnswer"
              name="newAnswer"
              aria-describedby="newAnswer"
            />
          </div>
          
        <button type="submit" class="btn btn-primary">Add Joke</button>
          
        </form>
    </div>


<?php
//This includes the code to allow the search of jokes containing a keyword
//include "search_keyword.php";


    //Then the DB is closed
$conn->close();
?>

</body>
</html>