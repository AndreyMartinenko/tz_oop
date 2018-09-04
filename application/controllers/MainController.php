<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.08.18
 * Time: 18:53
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller
{
    public function indexAction() {
        $pagination = new Pagination($this->route, $this->model->newsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->newsList($this->route),
        ];
        $this->view->render('Главная страница', $vars);
    }


    public function newsAction() {
        $adminModel = new Admin;
        if (!$adminModel->isNewsExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->newsData($this->route['id'])[0],
        ];
        $this->view->render('Новость', $vars);
    }
}