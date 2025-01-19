<?php
    include "service/database.php";
    session_start();

    $register_massage = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }


    if(isset($_POST['register'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hash_password = hash("sha256", $password);

        try {
            $sql = "INSERT INTO users (username, password) VALUES
        ('$username', '$hash_password')";
        
        if($db->query($sql)) {
            $register_massage = "daftar akun berhasi, silahkan login";
        } else {
            $register_massage = "daftar akun gagal, silahkan coba lagi";
        }

        }catch (mysqli_sql_exception) {
            $register_massage = "username sudah ada, silahkan ganti";
        }
        $db->close();

        
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopMeUp</title>
</head>
<body bgcolor="pink">
    <?php include "layout/header.html" ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    
    <button type="button" class="btn btn-outline-light" fdprocessedid="3e83bi">DAFTAR AKUN</button>

    <hr>
    <i><?= $register_massage ?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username" class="btn btn-secondary mx-2">
        <input type="password" placeholder="password" name="password" class="btn btn-secondary mx-2">
        <button type="submit" name="register" class="btn btn-secondary mx-2" >daftar sekarang</button>
    </form>
    <hr>
    <div class="alert alert-dismissible alert-primary">
  <button type="button" class="btn-close" data-bs-dismiss="alert" fdprocessedid="iwqyo"></button>
  <strong>Warning!</strong> the account name cannot be the same as the existing one</a> 
    </div>


</body>
</html>