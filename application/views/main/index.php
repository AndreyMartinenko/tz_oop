<header class="masthead" style="background-image: url('public/images/main.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <span class="subheading">Новости</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список новостей пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/news/<?= $val['id']; ?>">
                            <h2 class="post-title"><?= htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?= htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
                        <br/>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?= $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>