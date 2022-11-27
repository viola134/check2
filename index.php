<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check your birthday</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="text" name="Birthday">
        <input type="submit" name="checkdate" value="Check your birthday">
    </form>
    <br>
<?php
    $birthday = date("m.d.Y", strtotime("12/13/2007"));
    if (isset($_GET['checkdate'])) {
        $chbirthday = $_GET['Birthday'];
        preg_replace("/(\.|,|\s|:)/", " ", $birthday);
        $day = (int)(substr($chbirthday, 0, (0 - (strlen($chbirthday) - 2))));
        $month = (int)(substr($chbirthday, 3, (0 - (strlen($chbirthday) - 5))));
        $year = (int)(substr($chbirthday, 6));
        if (checkdate($day, $month, $year) == true && checkdate($day, $month, $year) == $birthday){
            echo "You checked it";
        } else {
            echo "Enter your bithday right!";
        }
    }
    ?>
</body>
</html>