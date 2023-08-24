<?php include "45_db.php"; ?>
<?php include "45_function.php"; ?>
<?php
createRows();
?>

<?php include "includes/header.php" ?>

<body>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create User</h1>
            <form action="43_login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>
        <?php include "includes/footer.php" ?>