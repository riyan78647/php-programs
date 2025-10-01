<html>
    <head>
        <title>find max & min number</title>
    </head>
    <body>
        <form method="post">
            enter number sepated by spaces:<br>
            <input type="text" name="numbers" required>
            <input type="submit" name="find max & min">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST['numbers'];

    $numbers = array_map('intval', explode(' ',$input));

    $maxnumber = max($numbers);
    $minnumber = min($numbers);
     
    echo "<h3>Results.</h3>";
    echo "your array is [".$input."]<br>";
    echo "Maximum number is :".$maxnumber . "<br>";
    echo "Minimum number is :".$minnumber;
}
?>

    </body>
</html>
