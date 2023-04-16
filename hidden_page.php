
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
        
            $content =  $content . $row['id'] . " | ". $row['login'] . " | " . $row['password'] . "<br>";
        
        }
        echo 'Вы вошли как:'.$_SESSION['login'];
    }
    else{
        echo "У вас нет доступа!!!";
    }
}

include("content/layout.php");

?>
