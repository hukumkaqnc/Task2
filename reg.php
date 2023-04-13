<?PHP
$title = "задание веб";
$page_title = "Регистрация";
$content = file_get_contents("content/form_reg.php");
require("content/layout.php");
require("boot.php");
if (isset($_POST["login"]) and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    $users_exist = pdo()->query("select * from `users` where login = '$login' and password = '$pas'")->fetch(PDO::FETCH_ASSOC);
    echo $login ." ".$pas;
    if (!$users_exist){
        $stmt = pdo()->query("INSERT INTO users(login, password) VALUES ('$login','$pas')");
    }
    else{
        echo "this user exists";
    }
    header("Location: ".$_SERVER['REQUEST_URI']);
}

?>
