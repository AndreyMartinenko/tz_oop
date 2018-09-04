<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29.08.18
 * Time: 11:53
 */
return [
    // Main
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'register' => [
        'controller' => 'main',
        'action' => 'register',
    ],
    'login' => [
        'controller' => 'main',
        'action' => 'login',
    ],
    'news/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'news',
    ],
    // Admin
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'admin/news/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'news',
    ],
    'admin/news' => [
        'controller' => 'admin',
        'action' => 'news',
    ],
];