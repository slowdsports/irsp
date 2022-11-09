<?php
if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])) {
    $user = $_COOKIE['user'];
    $pass = $_COOKIE['pass'];
    $query = mysqli_query($conn, "select * from `user` where username='$user' && password='$pass'");
    if (mysqli_num_rows($query) == 0) {
        $_SESSION["message"] = "¡Usuario o contraseña incorrectos!";
        header("location:home.php");
    } else {
        $row = mysqli_fetch_array($query);
        $_SESSION["id"] = $row["userid"];
        header("location:home.php");
        // Validate Referrer
    }
} else {
    echo '<meta http-equiv="refresh" content="3; url=home.php">';
}