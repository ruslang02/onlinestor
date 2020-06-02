<?php
	session_start();
    $conn = new mysqli();
    $stmt = $conn->prepare("SELECT ID,Name,Password FROM users WHERE Name=? AND Fee=1");
    $stmt->bind_param("s",$_POST['user']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id,$name,$pass);
    $stmt->fetch();
    if($stmt->num_rows === 1) {
        if(password_verify($_POST['pass'],$pass)) {
            $token = md5(openssl_random_pseudo_bytes(15));
            $conn->query("DELETE FROM `tokens` WHERE USERID='$id';");
            $query2 = $conn->query("INSERT INTO `tokens` VALUES(NULL,'$token','$id','$name',NULL)");
            $_SESSION['token'] = $token;
            echo $token;
            session_write_close();
            if ($_GET['redirect'] === "support")
                header("Location: /support");
            else
                header("Location: /redirect");
            exit();
        } else header("Location: /login?error=1&user=" . $_POST['user']);
    } else header("Location: /login?error=1&user=" . $_POST['user']);
