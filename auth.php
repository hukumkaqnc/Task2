<?PHP
$title = "Авторизация";
$page_title = "Вход";
$content = file_get_contents("content/form_auth.php");
require("boot.php");
if(isset($_POST["login"])and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    $users = pdo()->query("select * from `users` where '$login' = login and '$pas' = password ")->fetch(PDO::FETCH_ASSOC);
    if($users){
        $_SESSION['id'] = $users['id'];
        $_SESSION['login'] = $users['login'];
        $_SESSION['password'] = $users['password'];
        echo $_SESSION['id'];
        print_r(array_keys($users));
        print_r(array_values($users));
    }
    
    //print_r(array_keys($users));
    //print_r(array_values($users));
}


require("content/layout.php");
?>