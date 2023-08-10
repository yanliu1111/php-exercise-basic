<?php
if (isset ($_POST['submit'])) {
    $name = array("Tony", "Peter", "Natasha", "Bruce", "Thor", "Hulkk", "Steve", "Strange");
    $minimum = 5;
    $maximum = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];
   if (strlen($username) < $minimum) {
       echo "Username has to be longer than five";
   } else if (strlen($username) > $maximum) {
       echo "Username cannot be longer than ten";
   } else {
       echo "Hello " . $username;
   }
    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed";
    } else {
        echo "Welcome";
    }
}
?>