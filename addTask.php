<?PHP
require("boot.php");
$title = 'Добавить задание';
$page_title = "Вход";
$content = "";
if(isset($_SESSION['login']) and isset($_SESSION['password'])){
$content = "
<form action = '' method = 'post'>
    <textarea name = 'task'></textarea>
    <input type='submit'>
</form>
";



if (isset($_SESSION['login']) and isset($_SESSION['password']) and isset($_POST['task'])) {
    
    $id = $_SESSION['id'];
    $pas = $_SESSION['password'];
    $task = $_POST['task'];
    
  
    $stmt = pdo()->query("INSERT INTO `tasks`(`User_id`, `Task`) VALUES ('$id','$task')");
   
}
}
else{
    $content = "Для начала авторизуйтесь.";
}
require("content/layout.php");
?>