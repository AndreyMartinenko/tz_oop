<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.08.18
 * Time: 18:52
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller
{
    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
//        $_SESSION['admin'] = 0;
    }

    public function loginAction() {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin/add');
        }
        $this->view->render('Вход');
    }

    public function addAction() {
        if (!empty($_POST)) {
            if (!$this->model->newsValidate($_POST, 'add')) {
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->newsAdd($_POST);
            $this->view->message('success', 'ОК_id:'.$id);
            $this->model->newsUploadImage($_FILES['img']['tmp_name'], $id);
            $this->view->message('success', 'Новость добавлена');
        }
        $this->view->render('Добавить новость');
    }

    public function editAction() {
        if (!$this->model->isNewsExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        if (!empty($_POST)) {
            if (!$this->model->newsValidate($_POST, 'edit')) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->newsEdit($_POST, $this->route['id']);
            if ($_FILES['img']['tmp_name']) {
                $this->model->newsUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
            }
            $this->view->message('success', 'Сохранено');
        }
        $vars = [
            'data' => $this->model->newsData($this->route['id'])[0],
        ];
        $this->view->render('Редактировать новость', $vars);
    }

    public function deleteAction() {
        if (!$this->model->isNewsExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $this->model->newsDelete($this->route['id']);
        $this->view->redirect('admin/news');
        exit('deleted');
    }

    public function logoutAction() {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

    public function newsAction() {
        $mainModel = new Main;
        $pagination = new Pagination($this->route, $mainModel->newsCount());
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->newsList($this->route),
        ];
        $this->view->render('Новости', $vars);
    }
}