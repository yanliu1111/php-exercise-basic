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
//Works as of PHP 5.6.0
    const CONSTANT = 'Hello World';
    const ANOTHER_CONST = CONSTANT.'; Goodbye World';

    echo ANOTHER_CONST;


    const ANIMALS = array('dog', 'cat', 'bird');

    echo ANIMALS[1]; // outputs "cat"


//Works as of PHP 7

    define('ANIMALS2', array(

    'dog',

    'cat',

    'bird'

    ));

    echo ANIMALS2[1];
    ?>
</body>

</html>