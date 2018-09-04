<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Новости</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>Список новостей пуст</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Название</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                                        <td><a href="/admin/edit/<?= $val['id']; ?>" class="btn btn-primary">Редактировать</a></td>
                                        <td><a href="/admin/delete/<?= $val['id']; ?>" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?= $pagination; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>