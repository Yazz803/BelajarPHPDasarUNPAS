<?php
session_start();
$_SESSION = []; // ini supaya yakin, sessionnya ilang
session_unset(); // untuk memastikan bahwa sessionnya hilang
session_destroy();

header("Location: login.php");
?>