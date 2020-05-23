<?php
    session_start();
    require_once "connect.php";
    $login = $_POST["login"];
    $password = $_POST["password"];
    $password_rep = $_POST["password_rep"];
    $user = "user";

    if($password===$password_rep){
        if(strlen($password)>4 and strlen($login)>4){
            $password = md5($password);
            mysqli_query($conn, "INSERT INTO `users` (`login`, `password`, `status`) VALUES ('$login', '$password', '$user')");
            $_SESSION['message'] = "Регистрация прошла успешно!";
            $_SESSION['color'] = "green";
            header('Location: ../index.php');
        }
        else{
            $_SESSION['message'] = "Минимальная длина логина и пароля 5 символов";
            $_SESSION['color'] = "red";
            header('Location: ../register.php');
        };
        
    }
    else{
        $_SESSION['message'] = "Пароли не совпадают";
        $_SESSION['color'] = "red";
        header('Location: ../register.php');
    };
?>