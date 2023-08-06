<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

$number = array('juanita', 'maria', 'jose');

//print_r($number);

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

//print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'];
    
    
?>
</body>

</html>