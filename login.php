<?php
session_start();
if(isset($_SESSION['login']))
{
    header("Location:welcome.php"); exit;
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>lab2</title>
</head>
<body class="Registr">

<div class="auth">
    <form class="form" method="post" action="page.php">
        <div class="field">
            <label>Username</label>
            <input type="text" name="login">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <button class="button" type="submit">Login</button>
    </form>
</div>
</body>
</html>

