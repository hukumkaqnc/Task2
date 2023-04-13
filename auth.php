<?PHP
$title = "Авторизация";
$page_title = "Вход";
$content = file_get_contents("content/form_auth.php");
require("boot.php");
if(isset($_POST["login"])and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    $users = pdo()->query("select * from `users` where '$login' = Login and '$password' = Password ")->fetch(PDO::FETCH_ASSOC);
    if($users){
        $_SESSION['id'] = $array_select['id'];
        $_SESSION['login'] = $array_select['login'];
        $_SESSION['password'] = $array_select['password'];
    }
    print_r(array_keys($users));
    print_r(array_values($users));
}

require("content/layout.php");
?>