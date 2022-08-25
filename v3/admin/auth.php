<?php
if (isset($_POST["login"])) {
    session_start();
    include("backend/bd.php"); include ('includes/functions.php');

    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $refer = $_SESSION['referer'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $query = mysqli_query($conn, "select * from `admin` where username='$username' && password='$password'");

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
        $_SESSION["id"] = $row["id"];

        // Validate Referrer
        $app = "//".$_SERVER['SERVER_NAME']."/v3/admin";
        if ($refer == null){
            // Go index
            header ("location: $app");
        } else{
            header("Location: $refer");
        }
    }
} else {
    header("location: $app/login.php");
    $_SESSION["message"] = "¡Por favor inicia sesión!";
}
?>