<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaoud</title>
    <style>body{margin: 50px;}
            form button,
            form{font-size: 20px; font-weight: bold;}
    </style>
</head>
<body dir="rtl">
    <form action="" method="POST">
        <label for="price">السعر</label>
        <input type="text" name="price" id="price" required>
        <label for="discount">نسبة التخفيض (%)</label>
        <input type="text" name="discount" id="discount" required>
        <button type="submit" name="submit">عرض السعر بعد التخفيض</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            if(is_numeric($_POST['price']) and is_numeric($_POST['discount'])){
                $result  = (($_POST['price']*((100-($_POST['discount']))/100)));
                echo "<h2> السعر قبل التخفيض : {$_POST['price']} </h2>";
                echo "<h2> السعر بعد التخفيض بنسبة: {$_POST['discount']}%";
                echo " يكون : $result جنيه </h2>";
            }
            else{
                echo is_numeric($_POST['price'])?"":"<h3 style='color:red'> بيانات حقل السعر غير صالحه </h3>" ;
                echo is_numeric($_POST['discount'])?"":"<h3 style='color:red'> بيانات حقل التخفيض غير صالحه </h3>";
            }
            
        }
    ?>
</body>
</html>