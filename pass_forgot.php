<?php
@session_start();
if(isset($_SESSION["succes"])){
    include("controllers/c_user.php");
    $c_user = new c_user();
    $c_user->pass_forgot();
}else {
    header("Location:forgotPass.php");
    $_SESSION["error_1"] = "Sai email";
}