<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


// name a variable with $variablename//
// use quote for strings like always//
// variables are case sensitive -- $number and $NUMBER are different //
// don't use quotes with numbers, otherwise PHP won't recognize it//

$name = "Hannah";
$number = 100;

//concatonation looks like this below... you do a dot and space to connect two variables//

echo $name . $number; 

// you can assign HTML text and tags to variables //

$name = "<h1>HELLO!</h1>";

echo $name;

?>

</body>
</html>