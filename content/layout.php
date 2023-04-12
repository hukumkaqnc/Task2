<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "style.css" rel="stylesheet" type="text/css">
    <title><? = $title ?></title>
</head>

<body>
    <header>
        <h2>
            <? = $page_title ?> 
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
        </ul>
</nav>
<main>
    <div><?= $content ?></div>
        
    
</main>
    <footer>
        Kudryashov Nikita
    </footer>
</body>
</html>