<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Start Nav Bar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kaoud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.linkedin.com/in/mohamed-kaoud-b81762206/" target="_blank">Linkedin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailto:mohamedkaoud865@gmail.com">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Nave Bar -->
<div class="container" style="margin-top: 20px;">
<?php
$users=[
  'mohamed'=>"123456",
  'ali'=>"2468",
  'ahmed'=> "654321"
];

if(isset($_POST['login'])){
    //convert the input to text case the user enter any script
    $username= htmlspecialchars($_POST['username']);
    $password= htmlspecialchars($_POST['password']);
    if(isset($users[$username])){
        if($users[$username] ==$password){
            session_start();
            $_SESSION['USER']=$username;
            $_SESSION['PASSWORD']=$password;
            $_SESSION['LOGIN']=true;
            //move the user to index.php
            // header('location:index.php');

            //another way using js
            echo "<script> location.replace('index.php') </script>";
        
        }
        else {
             echo '<div class="alert alert-danger" role="alert">
             Wrong Password
           </div>';
        }
       
    }else{
        echo '<div class="alert alert-danger" role="alert">
      Username Not Found
      </div>';
    }

}
?>
  <!-- Login Form -->
  <form action="" method="POST">
    <label for="username" class="form-label" >Username : </label>
    <input type="text" name="username" id="username" required class="form-control">
    <br>
    <label for="password" class="form-label">Password : </label>
    <input type="password" name="password" id="password" required class="form-control">
    <br>
    <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
</div>

<!-- link bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>




