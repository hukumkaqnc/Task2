<?PHP
require_once __DIR__.'/boot.php';
$title = 'Показать задания';
$page_title = "Мои задания";
$content = "";

if(isset($_SESSION['id']) and isset($_SESSION['root']) and $_SESSION['root'] == 1){
$id = $_SESSION['id'];    
$stmt = pdo() ->query('SELECT * FROM tasks WHERE User_id ='.$id);
   
       
while ($row = $stmt -> fetch()){

    //$content =  $content . $row['User_id'] . " | ". $row['Task'] . " | " ."<br>";
    $content = $content.  
    "<form action='' method='post'> 
    <textarea cols = '1' readonly rows = '1' name = 'task_id'>".$row['task_id']
    ."</textarea><textarea  name = 'Ed_task'>".$row['Task']." 
    </textarea><input type='submit' name='change' value='Edit' />
    <input type='submit' name='delete' value='Delete' />
    </form>";
}
if(isset($_POST['task_id']) and isset($_POST['Ed_task']) and isset($_POST['change'])){
    $task_id = $_POST['task_id'];
    $stmt = pdo() ->query("UPDATE `tasks` SET `Task` = '".$_POST['Ed_task']."' WHERE `tasks`.`task_id` =".$task_id);
    header("Location: ".$_SERVER['REQUEST_URI']);
}

if(isset($_POST['task_id']) and isset($_POST['delete'])){
    $task_id = $_POST['task_id'];
    $stmt = pdo()-> query("DELETE FROM `tasks` WHERE `tasks`.`task_id` = ".$task_id);
    header("Location: ".$_SERVER['REQUEST_URI']);
}

}
else{
    $content = "Вы не авторизованы, либо у вас нет доступа к этой странице.";
}
require("content/layout.php");

?>