<?php

// Home page
$app->get('/', "MicroCMS\Controller\HomeController::indexAction");

// Detailed info about an article
$app->match('/article/{id}', "MicroCMS\Controller\HomeController::articleAction");

// Login form
$app->get('/login', "MicroCMS\Controller\HomeController::loginAction")
->bind('login');  // named route so that path('login') works in Twig templates

// Admin zone
$app->get('/admin', "MicroCMS\Controller\AdminController::indexAction");

// Add a new article
$app->match('/admin/article/add', "MicroCMS\Controller\AdminController::addArticleAction");

// Edit an existing article
$app->match('/admin/article/{id}/edit', "MicroCMS\Controller\AdminController::editArticleAction");

// Remove an article
$app->get('/admin/article/{id}/delete', "MicroCMS\Controller\AdminController::deleteArticleAction");

// Edit an existing comment
$app->match('/admin/comment/{id}/edit', "MicroCMS\Controller\AdminController::editCommentAction");

// Remove a comment
$app->get('/admin/comment/{id}/delete', "MicroCMS\Controller\AdminController::deleteCommentAction");

// Add a user
$app->match('/admin/user/add', "MicroCMS\Controller\AdminController::addUserAction");

// Edit an existing user
$app->match('/admin/user/{id}/edit', "MicroCMS\Controller\AdminController::editUserAction");

// Remove a user
$app->get('/admin/user/{id}/delete', "MicroCMS\Controller\AdminController::deleteUserAction");

// API : get all articles
$app->get('/api/articles', "MicroCMS\Controller\ApiController::getArticlesAction");

// API : get an article
$app->get('/api/article/{id}', "MicroCMS\Controller\ApiController::getArticleAction");

// API : create an article
$app->post('/api/article', "MicroCMS\Controller\ApiController::addArticleAction");

// API : remove an article
$app->delete('/api/article/{id}', "MicroCMS\Controller\ApiController::deleteArticleAction");
