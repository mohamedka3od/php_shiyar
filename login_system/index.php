<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
      <ul class="navbar-nav" style='width:90%'>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.linkedin.com/in/mohamed-kaoud-b81762206/" target="_blank">Linkedin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailto:mohamedkaoud865@gmail.com">Contact</a>
        </li>
      </ul>  
        <form method='POST'> <button type='submit' name='logout' class="btn btn-primary btn-sm">Logout</button> </form>
    </div>
  </div>
</nav>
<!-- End Nave Bar -->
<?php 
session_start();
$users=[
    'mohamed'=>"123456",
    'ali'=>"2468",
    'ahmed'=> "654321"
  ];

if(isset($_SESSION['USER']) && isset($_SESSION['PASSWORD']) && isset($_SESSION['LOGIN'])){
if($users[$_SESSION['USER']]===$_SESSION['PASSWORD']){
    //display a card for the user
    echo <<<EOF
        <div style="display:flex; justify-content:center; margin-top:50px">
            <div class="card border-primary mb-3" style="max-width: 18rem">
                <div class="card-header">Welcome</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Dear {$_SESSION['USER']}</h5>
                    <p class="card-text">we would like to thank you for joining us we hope you have had some fun with us.</p>
                </div>
            </div>
        </div>
    EOF;
}else{
    echo "<script> location.replace('login.php') </script>";

}
}
else{
    echo "<script> location.replace('login.php') </script>";
}

if(isset($_POST['logout'])){
    //clear the session
    session_unset();
    header('location:login.php');
}

?>
<!-- link bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
