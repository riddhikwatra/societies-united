<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-in</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- fonts used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <!-- for externally used symbols -->
    <script src="https://kit.fontawesome.com/7f7ecb9605.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- to call header from header.js -->
        <script src="../js/header.js"></script>
    <?php include('header.php');  ?>
    <div class="main-container">
        <div class="form-container">          
            <h2 class="sign-in">SIGN IN</h2>
            <form action="" method="POST">
                <!-- <label for="usename">Username : </label><br> -->
                <input type="text" id="username" name="username" placeholder="User Name"><br>
                <!-- <label for="password">Password : </label><br> -->
                <input type="password" id="password" name="password" pattern="[A-Za-z0-9]{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password"><br><br>
                <span id="cred"> </span>
                <input type="submit" value="Submit" name="submit" class="buttons">
                <input type="reset" class="buttons">
            </form>  
        </div>
    </div>
    <script src="../js/footer.js"></script>
</body>
</html>
<?php include('../admin/admin_login_db.php')  ?>