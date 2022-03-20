<?php
require_once('functions.php');
require_once('data.php');

// показывать или нет выполненные задачи
$is_auth = rand(0, 1);

$page_content = include_template('main.php', [
    'categories' => $categories,
    'items' => $items
]);

$layout_content = include_template('layout.php', [
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'content' => $page_content,
    'categories' => $categories,
    'title' => 'Главная страница'
]);
print($layout_content);