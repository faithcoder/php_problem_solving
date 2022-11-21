<?php
if ($_POST) {
    $input = $_POST['input'];
    for ($i = 2; $i <= $input - 1; $i++) {
        if ($input % $i == 0) {
            $value = True;
        }
    }
    if (isset($value) && $value) {
        echo '<h2> The Number ' . $input . ' is not prime</h2>';
    } else {
        echo '<h2>The Number ' . $input . ' is prime</h2>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finding Prime Number </title>
</head>

<body>
    <form method="post">
        Enter a Number: <input type="text" name="input"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>