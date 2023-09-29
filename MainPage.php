<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Полезные рецепты"; 
        echo "<title>$pageTitle</title>"; 
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="MainPage.css">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                    $menuItems = array(
                        array("Главная", "#"),
                        array("Рецепты", "#"),
                        array("Категории", "#"),
                        array("Обратная связь", "Feedback.html"),
                        array("О нас", "#"),
                        array("Вход", "Entrance.html")
                    );

                ?>
            </ul>
        </nav>
    </header>
    <header>
        <nav>
            <ul>
                <?php
                    $currentPage = $_SERVER['PHP_SELF']; 

                    foreach ($menuItems as $item) {
                        $address = $item[1]; 
                        $text = $item[0]; 
                        $class = ($address === $currentPage) ? "current" : ""; 
                        echo "<li><a href=\"$address\" class=\"$class\">$text</a></li>"; 
                    }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Самые вкусные рецепты у нас!</h1>
        <?php
            $seconds = date("s"); 

            if ($seconds % 2 == 0) {
                echo '<img src="recipe1.png" alt="Рецепт">'; 
            } else {
                echo '<img src="recipe2.png" alt="Рецепт">'; 
            }
        ?>
        <table>
            <tr>
                <th>Ингредиенты:</th>
                <th>Инструкция:</th>
            </tr>
            <tr>
                <td>Спагетти, мидии, креветки, ламинарии в соусе, чеснок, зелень. </td>
                <td>1. Обжарить на сковороде очищенные морепродукты с чесноком. </td>
                <td>  2. Смешать с отваренной до готовности пастой. </td>
                <td> 3. В готовое блюдо добавить мелко натёртый сыр и зелень</td>
            </tr>
        </table>
    </main>

    <footer>
        <?php
            $currentDateTime = date("d.m.Y в H:i:s"); 
            echo "<p>Сформировано $currentDateTime</p>"; 
        ?>
        <p>Контактная информация: no@no.com | Телефон: 123-456-7890</p>
        <p>© 2023 Полезные рецепты.</p>
    </footer>
</body>
</html>