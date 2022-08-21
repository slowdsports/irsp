<?php
if (isset($_POST["login"])) {
    session_start();
    include("conn.php"); include ('functions.php');

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

        if (isset($_POST["remember"])) {
            //set up cookie
            setcookie("user", $row["username"], time() + 86400 * 30);
            setcookie("pass", $row["password"], time() + 86400 * 30);
        }
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