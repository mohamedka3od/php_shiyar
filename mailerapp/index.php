<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container">
    
    <form action="" method="post" enctype="multipart/form-data">
        Subject: <input class="form-control" type="text" name="subject">
        Message: <input class="form-control" type="text" name="body">
        <input class="form-control mt-3" type="file" name="file">
        <div class="d-grid gap-2">
        <button class="btn btn-outline-primary d-block mt-3" type="submit" name="send">Send</button>
        </div>
    </form>
</div>


<?php
if(isset($_POST['send'])){
    
    require_once 'mail.php'; //get all from mail.php
    //Recipients
    $mail-> setFrom('mohamedkaoud865@gmail.com','Kaoud'); //('your mail','your name')
    $mail-> addAddress('mylifeforever414@gmail.com'); //the mail you want to send to Name is optional
    $mail -> Subject =$_POST['subject'];
    $mail -> Body =$_POST['body']; //can use html and css
   
    if(!empty($_FILES['file'])){
        $temp = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
    }
    $mail->addAttachment($temp, $name);    //Optional name
    $mail->send();
    // redirect to the same page to prevent sending the message again on refresh
    echo '<script>location.assign("index.php")</script>';
}
?>