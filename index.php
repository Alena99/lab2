<?php
session_start();
if(isset($_SESSION['login'])){
    if (empty($_SESSION['lang'])) {
        include('lang.php');
    } else {
        include('welcome.php');
    }
} else {
    Redirect('http://test/login.php"',false);

}
function Redirect($url, $permanent)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
?>