<?php
include_once("connection.php");

if (isset($_POST['register'])) {
    $name  = $_POST["dname"];
    $uname = $_POST["uname"];
    $pass  = md5($_POST["pass"]);
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $str = "INSERT INTO users (fname, uname, pass, phone, email) 
            VALUES ('$name', '$uname', '$pass', '$phone', '$email')";

    mysqli_query($conn,$str);
    header("location:index.php");
}

elseif (isset($_POST['login'])) {
    session_start(); // start session

    $uname = $_POST["uname"];
    $pass  = md5($_POST["pass"]);

    $str = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
    $res = mysqli_query($conn, $str);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);

        $_SESSION['user_id'] = $row["user_id"];
        $_SESSION['fname']   = $row["fname"];
        $_SESSION['uname'] = $row["uname"];
        header("Location: home.php");
        exit();
    } else {
        header("Location: index.php");;
    }
}
?>
