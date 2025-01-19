<?php
    include "service/database.php";
    session_start();

    $login_massage = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }


    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash('sha256', $password);

        $sql = "SELECT * FROM users WHERE username='$username' AND
        password= '$hash_password'
        ";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;
            
            header("location: dashboard.php");

        } else {
            $login_massage = "akun tidak di temukan";
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
    

    <h3>masuk akun</h3>
    <i><?= $login_massage ?></i>
    <form action="login.php" method="POST" >
        
        <input type="text" placeholder="username" name="username" class="btn btn-secondary mx-2">
        <input type="password" placeholder="password" name="password" class="btn btn-secondary mx-2">
        <button type="submit" name="login" class="btn btn-secondary mx-2" >masuk sekarang</button>
    </form>
    <hr>
    <strong>Don't have an account yet?</strong>please register first</a>.

   
</body>
</html>