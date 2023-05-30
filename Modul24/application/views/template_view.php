<!DOCTYPE html>
<html lang="ru">
<head>
 <meta charset="utf-8">
 <title>Главная</title>
</head>
<body>
    <header>
    <div id="side-box">
        <h2>Основное меню</h2>
        <ul class="list">
            <div class="links">
                <a href="main">Главная</a>
                <a href="about">Обо мне</a>
                <a href="contacts">Контакты</a>
                <a href="portfolio">Портфолио</a>
            </div>
        </ul>
    </div>  
    </header>  
    <main>
    <div id="content">
        <div class="box">
            <?php include 'application/views/'.$content_view; ?>
        </div>
    </div>
    </main> 
    <footer>
        <div class="copyright">Copyright &copy;&nbsp;Сайт-визитка 2023          
        </div>
    </footer>
</body>
</html>