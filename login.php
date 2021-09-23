<?php
    include('./functions.php');
?>



<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, initial-scale=1, shrink-to-fit=no">
    <title>my login</title>
</head>


<body>
    <h1>Sign In</h1>
    <p >Welcome back, please login.</p>
    <form action="#" method="post">
        <p >Username</p>
        <input type="text" name="username" id="username">
        <p>Password</p>
        <input type="password" name="password"  id="password">
        <span ><a href="#" >Forgot Password?</a></span> 
        <input type="submit" name="submit" value="Log In" onclick="stripbackslash" >
    </form>



<script src="./assets/js/functions.js"></script>
</body>
</html>