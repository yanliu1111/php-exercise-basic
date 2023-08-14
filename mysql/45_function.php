<?php include "45_db.php"; ?>
<?php
function createRows() {

if (isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
     
     $query = "INSERT INTO users(username, password) ";
     $query .= "VALUES ('$username', '$password')";
     $result = mysqli_query($connection, $query);
     if (!$result) {
         die('Query FAILED' . mysqli_error($connection));
     } else {
         echo "Record Create";
     }
    }  
  
}

function showAllDate () {
global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
}


while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
}
}

function updateTable(){
    if (isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Record Update";
    }
 }
}

function deleteRows(){
    if (isset($_POST['submit'])){
    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    else {
        echo "Record Deleted";
    }
    }
}
?>