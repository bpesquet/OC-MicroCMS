<?php

// Home page
$app->get('/', function () {
    require '../src/model.php';
    $articles = getArticles();

    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});
