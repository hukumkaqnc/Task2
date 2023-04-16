<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "style.css" rel="stylesheet" type="text/css">
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
        <h2>
            <?php echo $page_title ?> 
        </h2>
    </header>
<nav>
        <ul>
            <li>
                <a href="index.php">Главная</a>
            </li>
            <li>
                <a href="reg.php">Регистраиция</a>
            </li>
            <li>
                <a href="auth.php">Авторизация</a>
            </li>
            <li>
                <a href="hidden_page.php">Скрытая страница</a>
            </li>
            <li>
                <a href="addTask.php">Добавить</a>
            </li>
            <li>
                <a href="show_Tasks.php">Мои задания</a>
            </li>
        </ul>
</nav>
<main>
    <div><?= $content ?></div>
<form action = 'exit.php' method ='post'>  
    <input name="exit" type="submit" value="Выйти" />
</form>
    
</main>
    <footer>
        Kudryashov Nikita
    </footer>
</body>
</html>