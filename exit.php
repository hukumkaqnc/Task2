<?php
    session_start();
    //$conten = "";
    if(isset($_POST["exit"])){
        session_destroy();
        session_unset();
    }

//require("content/layout.php");
echo $_SERVER['REQUEST_URI'];
header("Location: "."auth.php");
?>