<?php

use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Domain\Comment;
use MicroCMS\Form\Type\CommentType;

// Home page
$app->get('/', function () use ($app) {
    $articles = $app['dao.article']->findAll();
    return $app['twig']->render('index.html.twig', array('articles' => $articles));
})->bind('home');

// Article details with comments
$app->match('/article/{id}', function ($id, Request $request) use ($app) {
    $article = $app['dao.article']->find($id);
    $commentFormView = null;
    if ($app['security.authorization_checker']->isGranted('IS_AUTHENTICATED_FULLY')) {
        // A user is fully authenticated : he can add comments
        $comment = new Comment();
        $comment->setArticle($article);
        $user = $app['user'];
        $comment->setAuthor($user);
        $commentForm = $app['form.factory']->create(CommentType::class, $comment);
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $app['dao.comment']->save($comment);
            $app['session']->getFlashBag()->add('success', 'Your comment was successfully added.');
        }
        $commentFormView = $commentForm->createView();
    }
    $comments = $app['dao.comment']->findAllByArticle($id);

    return $app['twig']->render('article.html.twig', array(
        'article' => $article, 
        'comments' => $comments,
        'commentForm' => $commentFormView));
})->bind('article');

// Login form
$app->get('/login', function(Request $request) use ($app) {
    return $app['twig']->render('login.html.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('login');
