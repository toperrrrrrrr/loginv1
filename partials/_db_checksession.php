<!-- these are for register and login  -->
<?php
 session_start();
    if(isset($_SESSION["username"])){
    header("Location: index.php");
    exit(); }
?>