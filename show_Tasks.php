<?PHP
require_once __DIR__.'/boot.php';
$title = 'Показать задания';
$page_title = "Мои задания";
$content = "";

if(isset($_SESSION['id'])){
$id = $_SESSION['id'];    
$stmt = pdo() ->query('SELECT * FROM tasks WHERE User_id ='.$id);
   
       
while ($row = $stmt -> fetch()){

    //$content =  $content . $row['User_id'] . " | ". $row['Task'] . " | " ."<br>";
    $content = $content.  
    "<form action='' method='post'> <div>".$row['User_id']. ' | '.$row['Task']."</div> <input type='checkbox' name='block' value='Yes' /></form>";
}

}
else{
    $content = "Для начала авторизуйтесь.";
}
require("content/layout.php");
?>