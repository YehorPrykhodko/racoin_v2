<?php
use Slim\Factory\AppFactory;
use DI\Container;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

// Подключаем маршруты
(require __DIR__ . '/../src/Routes/web.php')($app);

$app->run();
