

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="img" id="img" required>
    <button type="submit" name="submit">Upload</button>
</form>

<?php
if(isset($_POST['submit'])){
    // echo $_FILES['img']['name']; //img1.jpg
    // echo "<br>";
    // echo $_FILES['img']['tmp_name']; //temproray name for a copy of th file
    // echo $_FILES['img']['size']; //size of file in byte
    // echo $_FILES['img']['type']; //image/jpeg
    // move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']);//move the uploaded file 
    
    echo $_FILES['img']['type']; // image/jpeg
    echo "<br>";
    echo basename($_FILES['img']['name']); //about.jpg
    
    echo "<br>". pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);// jpg
    
    print_r( pathinfo($_FILES['img']['name'],PATHINFO_ALL));// Array ( [dirname] => . [basename] => about.jpg [extension] => jpg [filename] => about )
    
    echo "<br>";
    var_dump(file_exists("images/"."hol.jpg"));//"file path"."file name"
    echo "<br>";
    print_r( getimagesize($_FILES['img']['tmp_name'])); //Array ( [0] => 1920 [1] => 1080 [2] => 18 [3] => width="1920" height="1080" [bits] => 8 [mime] => image/webp )

    
    if(file_exists("images/"."hol.jpg")){
        //delete the file if exists
        unlink("images/"."hol.jpg");
        echo "<br> deleted successfully";
    }else{
        echo "<br> file dosen't exists";
    }

}

?>
