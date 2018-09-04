<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <link href="../../../public/styles/bootstrap.css" rel="stylesheet">
    <link href="../../../public/styles/admin.css" rel="stylesheet">
    <script src="../../../public/scripts/jquery.js"></script>
    <script src="../../../public/scripts/form.js"></script>
    <script src="../../../public/scripts/popper.js"></script>
    <script src="../../../public/scripts/bootstrap.js"></script>
</head>
<body class="fixed-nav sticky-footer bg-dark">
<?php if ($this->route['action'] != 'login'): ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/admin/news">Админпанель </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/add">
                        <i class="fa fa-fw fa-plus"></i>
                        <span class="nav-link-text">Добавить новость</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/news">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Новости</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout">
                        <i class="fa fa-fw fa-sign-out"></i>
                        <span class="nav-link-text">Выход</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>
<?php echo $content; ?>
<?php if ($this->route['action'] != 'login'): ?>
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>&copy; 2018, Новости</small>
            </div>
        </div>
    </footer>
<?php endif; ?>
</body>
</html>