<?php include "45_db.php"; ?>
<?php include "45_function.php";?>
<?php

updateTable();

?>

<?php include "includes/header.php" ?>


<body>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">UPDATE USER</h1>
            <form action="45_48login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                      showAllDate();
                        ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

            </form>
        </div>
        <?php include "includes/footer.php" ?>