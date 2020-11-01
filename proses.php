<?php
    include "koneksi.php";
        session_start();
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                $op = $_GET['login'];
            if($op=="masuk"){
                        $verliquier=$verlipdo->prepare("select * from tb_login where username=:username and password=:password");
                        $verliquier->bindParam(':username', $username);
                        $verliquier->bindParam(':password', $password);
                        $verliquier->execute();
                    $marcel = $verliquier->rowCount();
            if($marcel== 1){
                $marcel=$verliquier->fetch();
                        $_SESSION['username'] = $marcel['username'];
                        $_SESSION['password'] = $marcel['password']; 
                        $_SESSION['level'] = $marcel['level'];
                    $_SESSION['foto'] = $marcel['foto'];
                $homepage="homepage.html";
            if($marcel['level']=="admin"){
                    header("location:index.php");
                }else if($marcel['level']=="guru"){
                    header("location:homepage.html");
                }else if($marcel['level']=="siswa"){
                    header("location:homepage.html");
                }
                    }else{
            echo
            include"login.php";
            }
                }else if($op=="out"){
            unset($_SESSION['username']);
        unset($_SESSION['level']);
    header("location:login.php");
    }
?>

