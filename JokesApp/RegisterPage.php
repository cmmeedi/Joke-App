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

    <title>Document</title>
  </head>

  <body>
          
            <!-- Basic Navbar -->
        <div class="navbar navbar-light bg-light">
          <a href="#" class="navbar-brand ">Login</a>
        </div>


            <!-- This is the beginning of the form to be submitted to the DB -->
        <form class="form-horizontal" action="process_new_user.php">
          <fieldset>
                <!-- The email form-group -->
            <div class="container">
                <div class="form-group">
                    <label for="emailLogin" class="display-4">Email</label>
                    <input 
                    id="emailLogin" for="email" class="form-control col-6" aria-describedby="emailHelp" >
                    <small id="emailHelp" class="form-text text-muted">This information will not be shared</small>
                </div>

                    <!-- The Password form-group -->
                <div class="form-group">
                    <label for="username" class="display-4">Username</label>
                    <input 
                    id="username" 
                    type="text" 
                    class="form-control col-6" >
                </div>

                      <!-- The Password form-group -->
                <div class="form-group">
                    <label for="password" class="display-4">Password</label>
                    <input 
                    id="password" 
                    type="password" 
                    class="form-control col-6" >
                </div>

                    <!-- The Password re-entry form-group -->
                <div class="form-group">
                    <label for="confirmPassword" class="display-4">Confirm Password</label>
                    <input 
                    id="confirmPassword" 
                    type="password" 
                    class="form-control col-6" >
                    <small id="passwordHelp" class="form-text text-muted">Please re-enter your password to confirm</small>
                </div>

                <div class="form-group">
                      <!-- <label for="submit" class="col-md-4 control-label"></label> -->
                      <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                      </div>
                </div>
              </div>
          </fieldset>
        </form>

      <?php

      ?>
  </body>
</html>
