
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
    Enter a number : <input type="number" name="Number">
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>



<?php
// script 19 to obtain the number is prime or not.
$number=$_POST['Number'];
if($number==2){
    echo "The number is prime.";
}
elseif($number%2==0 && $number%3==0 && $number%5==0){
    echo "The number is not prime";

}
else{
    echo "The number is a prime number";
}

?>
