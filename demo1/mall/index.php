<?
session_start();

if (!$_SESSION['user'] || empty($_SESSION['user'])){
    header('Location:login.php');
    exit;
}

echo '商品中心';
?>