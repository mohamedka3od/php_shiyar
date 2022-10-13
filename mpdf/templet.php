<?php
$html="
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>

</head>
<body class='container'>
    
    <div class='personal'>
        <div class='img'>
            
         <img src='images/$img' alt=''>
        </div>
    
        <div class='info'>
            <h1>$name</h1>
            <p>
                $obj
            </p>
        </div>
    </div>
    <!-- Info Section -->
    <div class='header'>
        <h3>Personal Info:</h3>
    </div>
    <ul>
        <li><span>Date of Birth:</span> $date</li>
        <li><span>Marital Status:</span> $status.</li>
        <li><span>Nationality:</span> Egyptian.</li>
    </ul>
    <!-- Education Section -->
    <div class='header'>
        <h3>Education and Traning:</h3>
    </div>
    <ul>
        <li>Faculty of Computers and Informatics, Zagazig University Egypt</li>
        <li>iTi – Mobile Cross-Platform Development Using React Native (1 month internship)</li>
        <li>iTi 101 Program – Introdction to Computer Science (CS50 Harvard)</li>
    </ul>
    
    
</body>
</html>
";
?>