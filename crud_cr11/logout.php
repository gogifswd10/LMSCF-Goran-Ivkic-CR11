
<?php
require_once "actions/db_connect.php";
session_start();
if (!isset($_SESSION['admin'])) {
 header( "Location: admin.php");
} else if(isset($_SESSION[ 'user'])!="") {
 header("Location: home.php");
}

if  (isset($_GET['logout'])) {
 unset($_SESSION['user' ]);
 session_unset();
 session_destroy();
 header("Location: indexLogin.php");
 exit;
}
if  (isset($_GET['logout'])) {
 unset($_SESSION['admin' ]);
 session_unset();
 session_destroy();
 header("Location: indexLogin.php");
 exit;
}
?>