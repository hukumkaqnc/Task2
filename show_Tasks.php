<?PHP
require_once __DIR__.'/boot.php';
$title = 'Показать задания';
$page_title = "Мои задания";
$content = "";
$id = $_SESSION['id'];
echo $_SESSION['id'];
$stmt = pdo() ->query('SELECT * FROM tasks WHERE User_id ='.$id);
    
        
while ($row = $stmt -> fetch()){

    $content =  $content . $row['User_id'] . " | ". $row['Task'] . " | " ."<br>";

}
require("content/layout.php");
?>