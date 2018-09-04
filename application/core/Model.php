<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.08.18
 * Time: 23:30
 */

namespace application\core;

use application\lib\Db;

abstract class Model
{
    public $db;

    public function __construct() {
        $this->db = new Db;
    }
}