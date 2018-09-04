<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <link href="../../../public/styles/bootstrap.css" rel="stylesheet">
    <link href="../../../public/styles/main.css" rel="stylesheet">
    <link href="../../../public/styles/columns.css" rel="stylesheet">
    <link href="../../../public/styles/popup.css" rel="stylesheet">

    <script src="../../../public/scripts/jquery.js"></script>
    <script src="../../../public/scripts/form.js"></script>
    <script src="../../../public/scripts/popper.js"></script>
    <script src="../../../public/scripts/bootstrap.js"></script>
    <script src="../../../public/scripts/doyou.js"></script>

</head>
<body>



<div class="col1">
    <div class="adw" id="column">
        <img src="../../../public/images/adw.jpg" alt="">
         <p>Реклама 2<br/><br/>adwertisment2</p>
    </div>
    <div class="adw">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 2<br/><br/>adwertisment2</p>
    </div>
    <div class="adw">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 3<br/><br/>adwertisment2</p>
    </div>
    <div class="adw">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 4<br/><br/>adwertisment2</p>
    </div>
</div>
<div class="col2">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">Выбор категорий</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <?= $content; ?>
    <hr>
    <footer style="background-image: url('/../../../public/images/footer.jpg')">
        <div class="container">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p class="copyright text-muted">&copy; 2018, Новости</p>
                </div>
        </div>
    </footer>
</div>
<div class="col3">
    <div class="adw" id="column">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 2<br/><br/>adwertisment__2</p>
    </div>
    <div class="adw">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 2<br/>adwertisment6<br/>adwertisment__2</p>
    </div>
    <div class="adw">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 3<br/><br/>adwertisment__2</p>
    </div>
    <div class="adw">
        <img src="../../../public/images/adw.jpg" alt="">
        <p>Реклама 4<br/>adwertisment8<br/>adwertisment__2</p>
    </div>
</div>


<form action="" method="post">
<div id="pop_window">
    <div id="popup">
        <h2>Подпишитесь на рассылку</h2>
        <label for="Email">Ваш Email:</label>
        <input placeholder="Email." id="Email">
        <label for="Name">Имя и фамилия</label>
        <input placeholder="Ваше Имя" id="name">
        <button id="send" type="submit" onclick="document.getElementById('pop_window').style.display='none';">Подписаться</button>
        <a class="close" title="Закрыть" onclick="document.getElementById('pop_window').style.display='none';">X</a>
    </div>
</div>
</form>
<script src="../../../public/scripts/popup.js"></script>



</body>

</html>