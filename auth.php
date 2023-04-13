<?PHP
$title = "В-П семинар";
$page_title = "Вход";
$content = file_get_contents("content/form_auth.php");
session_start();
//$_SESSION['login'] =  $content['login']
include("content/layout.php");
?>