<?php
session_start();


$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat',],
];
//var_dump($_POST['login']);die();
if (
    empty($_POST['login'])
    && empty($_POST['password'])
    &&!$_SESSION['auth']) {
    header("Location: http://test:81/login.php");
}
foreach ($users as $value) {
    if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password']) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['lang'] = $value['lang'];
        $_SESSION['auth'] = true; //если логин и пароль верны, переменная тру
        break;
    }
}
if (isset($_SESSION['login'])) {
    if (empty($_SESSION['lang'])) {
        include('lang.php');
    } else {
        include('welcome.php');
    }
} else {
    include('login.php');
}
?>