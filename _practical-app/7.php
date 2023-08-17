<?php include "functions.php"; ?>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'mylist');
if(!$connection){
	die('Database Connection Failed') . mysqli_error($connetion);
} 

$query = 'select * from reports';
$result = mysqli_query($connection, $query);
if (!$result){
	die ("Query failed");
}

?>
<?php include "includes/header.php";?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">



        <?php  
while($record = mysqli_fetch_assoc($result)){
 echo $record['days_of_the_week'];
}
	
	
	?>





    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>