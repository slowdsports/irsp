<?php
if (isset($_POST["login"])) {
    session_start();
    include("conn.php"); include ('inc/functions.php');

    $username = $_POST["username"];
    $password = $_POST["password"];
    $refer = $_SESSION['referer'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $query = mysqli_query($conn, "select * from `user` where username='$username' && password='$password'");

    if (mysqli_num_rows($query) == 0) {
        $_SESSION["message"] = "¡Usuario o contraseña incorrectos!";
        header("location:login.php");
    } else {
        $row = mysqli_fetch_array($query);
            //set up cookie
            $name_cookie = "user";
            $value_cookie = $row['username'];
            setcookie($name_cookie, $value_cookie, time() + (86400 * 30));
            //setcookie($name_cookie, $value_cookie, time() + 30);
            // cookie will expire in a month, 86400 = 1 day
            //setcookie("user", $row["username"], time() + 86400 * 30);
            //setcookie("pass", $row["password"], time() + 86400 * 30);
        $_SESSION["id"] = $row["userid"];

        // Validate Referrer
        $app = "//".$_SERVER['SERVER_NAME']."/v3/";
        if ($refer == null){
            // Go index
            header ("location: $app");
        } else{
            header("Location: $refer");
        }

        // // validate ios
        // if (preg_match("/iPhone/i", $useragent || preg_match("/iPad/i", $useragent))){
        //     $device = "ios";
        //     header("location:ios");

        // }
    }
} else {
    header("location: $app/login.php");
    $_SESSION["message"] = "¡Por favor inicia sesión!";
}
?>