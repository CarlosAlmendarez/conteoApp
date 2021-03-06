<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistea de Administración</title>
</head>
<body>
    <body>
        <header>
            <nav class="navbar navbar-light bg-light justify-content-between navImg">
                <a class="navbar-brand"><img src="logo.png" class="logo" alt=""></a>
                <form class="form-inline" method="delete">
                    <button class="btn btn-outline-success my-2 my-sm-0 ml-2" type=""><i class="far fa-user"></i>San Luis Potosí</button>
                  <button class="btn btn-outline-danger my-2 my-sm-0 ml-2" name="delete" type="submit"><i class="fas fa-sign-out-alt"></i>Salir</button>
                </form>
              </nav>
        </header>
    
        <main role="main">
    
          <section class="jumbotron text-center" style="margin-bottom: -2rem">
            <div class="container">
                <h1 class="display-5">Sistema de Administración</h1>
                <hr class="my-4 text-dark">
                <h1 class="display-4 text-info">Fuerza Turquesa</h1>
                
                <div class="card border-info">
                    <div class="card-header">
                      Menú
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="btn btn-outline-dark">
                                  <div class="card-title display-4 text-info"> <i class="fas fa-building"></i></div>
                                  <div class="card-body">
                                    <p class="card-text">Sección</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="btn btn-outline-dark" onClick="document.location.href='RG.php'">
                                  <div class="card-title display-4 text-info"><i class="far fa-id-card"></i></div>
                                  <div class="card-body">
                                    <p class="card-text">RG Estatal</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="btn btn-outline-dark" onClick="document.location.href='RC.php'">
                                  <div class="card-title display-4 text-info"><i class="far fa-id-card"></i></div>
                                  <div class="card-body">
                                    <p class="card-text">RC Estatal</p>
                                  </div>
                                </div>
                              </div>
                            <div class="col-md-3">
                              <div class="btn btn-outline-dark">
                                <div class="card-title display-4 text-info"><i class="fas fa-chart-bar"></i></div>
                                <div class="card-body">
                                  <p class="card-text">Estadísticas</p>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
          </section>
        </main>
    
        <footer class="text-muted">
            <div class="card text-white bg-info mb-3">
                
                <div class="card-body">
                  <h5 class="card-title">Info</h5>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed explicabo eaque dolorum provident rerum aspernatur repudiandae perspiciatis eveniet voluptatum, quis, soluta vel dolorem! Neque enim consectetur perferendis explicabo alias quae.</p>
                </div>
              </div>
        </footer>
</body>
</html>
<?php
if(isset($_POST['delete'])){
  logOut();
}
function logOut(){
  
  session_start();

  // Unset all of the session variables.
  $_SESSION['sess_user'] = array();
  
  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
  
  // Finally, destroy the session.
  session_destroy();
header("Location: index.php");
}
?>