<?PHP
require("boot.php");
$title = 'Добавить задание';
$page_title = "Вход";
$content = "
<form action = '' method = 'post'>
    <textarea name = 'task'></textarea>
    <input type='submit'>
</form>
";
require("content/layout.php");


if (isset($_SESSION['login']) and isset($_SESSION['password']) and isset($_POST['task'])) {
    
    $id = $_SESSION['id'];
    $pas = $_SESSION['password'];
    $task = $_POST['task'];
    
  
    $stmt = pdo()->query("INSERT INTO `tasks`(`User_id`, `Task`) VALUES ('$id','$task')");
    //$users = pdo() ->query("select * from `tasks` where '$id' = User_id");
    
        
        //while ($row = $users -> fetch()){
        
//$content =  $content . $row['User_id'] . " | ". $row['Task'] . " | " ."<br>";
        
        //}
}

?>