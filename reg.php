<?PHP
$title = "задание веб";
$page_title = "Регистрация";
$content = file_get_contents("content/form_reg.php");
include("content/layout.php");
if (isset($_POST["login"]) and isset($_POST["password"])){
    $login = $_POST["login"];
    $pas = $_POST["password"];
    echo $login ." ".$pas;
    require_once 'boot.php';
    $stmt = pdo()->query("INSERT INTO users(login, password) VALUES ('$login','$pas')");
    header("Location: ".$_SERVER['REQUEST_URI']);
}

?>
