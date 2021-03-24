<?php
///**
// * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
// * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
// *
// * Licensed under The MIT License
// * For full copyright and license information, please see the LICENSE.txt
// * Redistributions of files must retain the above copyright notice.
// *
// * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
// * @link      https://cakephp.org CakePHP(tm) Project
// * @since     0.10.0
// * @license   https://opensource.org/licenses/mit-license.php MIT License
// * @var \App\View\AppView $this
// */
//use Cake\Cache\Cache;
//use Cake\Core\Configure;
//use Cake\Core\Plugin;
//use Cake\Datasource\ConnectionManager;
//use Cake\Error\Debugger;
//use Cake\Http\Exception\NotFoundException;
//
//$this->disableAutoLayout();
//
//if (!Configure::read('debug')) :
//    throw new NotFoundException(
//        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
//    );
//endif;
//
//$cakeDescription = 'CakePHP: the rapid development PHP framework';
//?>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
    <?= $this->Html->charset() ?>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>-->
<!--        --><?//= $cakeDescription ?><!--:-->
        <?= $this->fetch('title') ?>
<!--    </title>-->
    <?= $this->Html->meta('icon') ?>

<!--    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

<?php //echo $this->Html->css("bootstrap.min.css"); ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<body>

            <h1>
                Welcome to CakePHP Strawberry (🍓)
            </h1>

            <br>

            <H2>Use the nav bar to navigate </H2>

            <p>This is a project I created for Yordas Group using CakePHP and enjoyed it, still a lot to learn yet </p>

            <p>Search using EM and CAS numbers on table 2 </p>

</body>

</head>

</html>
