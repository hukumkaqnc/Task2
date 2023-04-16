
<?PHP
$title = "Скрытвя страница";
$page_title = "Секретная страница";
$content = "";

require_once __DIR__.'/boot.php';
if (isset($_SESSION['login'])){
    
    $log = $_SESSION['login'];
    
    if($log == 'admin'){
        $stmt = pdo() ->query("SELECT * FROM users");
        
        while ($row = $stmt -> fetch()){
        
            $content =  $content ."<form action='' method='post'> <textarea cols = '1' readonly rows = '1' name = 'id'>".$row['id']."</textarea><p>" . $row['login'] . "</p><p>". $row['password']."</p></div> 
            <input name='block' type='submit' value='Block' />
            <input name='unlock' type='submit' value='Unlock' />";
        }
        echo 'Вы вошли как:'.$_SESSION['login'];
    }
    else{
        echo "У вас нет доступа!!!";
    }
}

if(isset($_POST['block']) && isset($_POST['id'])) 
{
    $id = $_POST['id'];
    $stmt = pdo() ->query("UPDATE `users` SET `root` = '0' WHERE `users`.`id` =".$id);
}
if(isset($_POST['unlock']) && isset($_POST['id'])) 
{
    $id = $_POST['id'];
    $stmt = pdo() ->query("UPDATE `users` SET `root` = '1' WHERE `users`.`id` =".$id);
}

include("content/layout.php");

?>
