<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $score = 80;
    // if ($score >=0 && $score <= 100) {
    //     echo "A";
    // } 
    // else if ($score >= 70) {
    //     echo "B";
    // }
    // else if ($score >= 60) {
    //     echo "C";
    // } 
    // else if ($score >= 50) {
    //     echo "D";
    // } 
    // else {
    // echo "F";
    // }

    $score = 10;

    if ($score >= 70 && $score <= 100) {
        echo "A";
    } else if ($score >= 60) {
        echo "B";
    } else if ($score >= 50) {
        echo "C";
    } else if ($score >= 40) {
        echo "D";
    } else {
        echo "F";
    }

    ?>

</body>

</html>