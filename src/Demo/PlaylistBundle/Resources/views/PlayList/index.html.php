<?php $view->extend('::base.html.twig') ?>

<?php $view['slots']->set('title', 'PlayListBundle:PlayList:index') ?>

<?php $view['slots']->start('body') ?>
    <h1>Welcome to the PlayList:index page </h1>

<?php $view['slots']->stop() ?>
