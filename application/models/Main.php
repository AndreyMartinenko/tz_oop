<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.08.18
 * Time: 22:43
 */

namespace application\models;
use application\core\Model;

class Main extends Model
{
    public $error;

    public function newsCount() {
        return $this->db->column('SELECT COUNT(id) FROM news');
    }

    public function newsList($route) {
        $max = 5;
        $params = [
            'max' => $max,
            'start' => ((isset($route['page']) ? $route['page'] : 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM news ORDER BY id DESC LIMIT :start, :max', $params);
    }
}