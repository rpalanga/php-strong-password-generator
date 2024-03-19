<?php
session_start();

if(isset($_SESSION['showPass'])){
    echo $_SESSION['showPass'];
}

?>