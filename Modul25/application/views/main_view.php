<head>
    <title>ГЛАВНАЯ</title>

</head>
<body>
    <header>
    <div id="side-box">
        <h2></h2>
        <ul class="list">
            <div class="links">
                <a href="auth">Авторизация</a>
                <a href="reg">Регистрация</a>
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
        <div class="copyright">Copyright &copy;&nbsp;Галерея изображений 2023          
        </div>
    </footer>
</body>