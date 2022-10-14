<?php
@session_start();
include ("controllers/c_user.php");
if($_GET['func']) {
    $admin = new c_user();
    $admin->logout();
}