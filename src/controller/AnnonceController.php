<?php
namespace App\Controller;

use PDO;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AnnonceController
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function list(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $stmt = $this->pdo->query('SELECT id_annonce, titre, prix FROM annonce LIMIT 20');
        $annonces = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $response->getBody()->write(json_encode($annonces));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
