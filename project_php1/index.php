<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>discount</title>
    <style>
        body {
            margin: 50px;
        }

        /* use the same style for form and button */
        form button,
        form {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<!-- rtl to make the direction from right to left for arabic lang -->

<body dir="rtl">
    <form action="" method="POST">
        <!-- label for is used with the id of the input -->
        <label for="price">السعر</label>
        <input type="text" name="price" id="price" required>
        <label for="discount">نسبة التخفيض (%)</label>
        <input type="text" name="discount" id="discount" required>
        <button type="submit" name="submit">عرض السعر بعد التخفيض</button>
    </form>
    <?php

if (isset($_POST['submit'])) // check that submit button is prissed (not null)
{
    // check that the user put numbers only
    if (is_numeric($_POST['price']) and is_numeric($_POST['discount'])) {
        // calc the result of the number after discound
        $result = (($_POST['price'] * ((100 - ($_POST['discount'])) / 100)));
        echo "<h2> السعر قبل التخفيض : {$_POST['price']} </h2>";
        echo "<h2> السعر بعد التخفيض بنسبة: {$_POST['discount']}%";
        echo " يكون : $result جنيه </h2>";
    }
    else {
        //tell the user what is wrong
        echo is_numeric($_POST['price']) ? "" : "<h3 style='color:red'> بيانات حقل السعر غير صالحه </h3>";
        echo is_numeric($_POST['discount']) ? "" : "<h3 style='color:red'> بيانات حقل التخفيض غير صالحه </h3>";
    }

}
?>
</body>

</html>