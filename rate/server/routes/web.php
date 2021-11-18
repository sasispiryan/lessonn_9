<?php
    $configs = require('./../configs/database.php');
    $action = '';
    require './../app/models/Rate.php';
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
    } else if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    $rate = new Rate($configs);
    if($action === 'dolar') {
        echo $rate->getRate($_GET['name']);
    } else if($action === 'update_rate') {
        echo $rate->updateRate($_POST['rate']);
    }else if ($action === 'evro') {
        echo $rate->getRate($_GET['name']);
    }

