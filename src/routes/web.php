<?php
use Slim\App;
use App\Controller\AnnonceController;

return function (App $app): void {
    $app->get('/annonces', [AnnonceController::class, 'list']);
};
