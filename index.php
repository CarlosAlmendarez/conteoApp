<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="formContent">
        <!-- Tabs Titles -->
    
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="user.png" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form action="" method="post">
          <input type="text" id="user" class="fadeIn second" name="user" placeholder="login">
          <input type="text" id="pass" class="fadeIn third" name="pass" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Ingresar" name="submit">
        </form>
    
    
      </div>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
   login();
}

function login(){
  
   if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
      $user=$_POST['user'];  
      $pass=$_POST['pass'];  
    
      $con=mysqli_connect('localhost','root','','database') or die("Unable to connect to MySQL"); 
    
      $query=mysqli_query($con,'SELECT * FROM USERS WHERE USERNAME="'.$user.'" AND PASSWORD="'.$pass.'"')or die("Unable to connect to MySQL") ;  
      $numrows=mysqli_num_rows($query);  
      if($numrows!=0)  
      {  
      while($row=mysqli_fetch_assoc($query))  
      {  
      $dbusername=$row['USERNAME'];  
      $dbpassword=$row['PASSWORD'];  
      }  
    
      if($user == $dbusername && $pass == $dbpassword)  
      {  
      session_start();  
      $_SESSION['sess_user']=$user;  
    
      /* Redirect browser */  
      header("Location: home.php");  
      }  
      } else {  
      echo "Invalid username or password!";  
      }  
    
  } else {  
      echo "All fields are required!";  
  }  
}
?>