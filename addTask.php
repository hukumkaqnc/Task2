<?PHP
require("boot.php");
$title = "веб - технологии";
$page_title = "Вход";
$content = "
<form action = '' method = 'post'>
    <textarea name = 'task'></textarea>
    <input type='submit'>
</form>
";
require("content/layout.php");
//require("boot.php");

if (isset($_SESSION['login']) and isset($_SESSION['password']) and isset($_POST['task'])) {
    
    $id = $_SESSION['id'];
    $pas = $_SESSION['password'];
    $task = $_POST['task'];
    
    // require_once __DIR__ . '/boot.php';
    $stmt = pdo()->query("INSERT INTO `tasks`(`User_id`, `Task`) VALUES ('$id','$task')");
}

?>