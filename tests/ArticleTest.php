<?php

use PHPUnit\Framework\TestCase;

final class ArticleTest extends TestCase
{
    private array $annonces;

    protected function setUp(): void
    {
        $this->annonces = [
            [
                'id_annonce' => 1,
                'id_categorie' => 2,
                'id_sous_categorie' => 3,
                'id_annonceur' => 4,
                'id_departement' => 5,
                'prix' => 99.99,
                'date' => '2024-01-01',
                'titre' => 'Chaise vintage',
                'description' => 'Chaise ancienne en bois massif',
                'ville' => 'Nancy',
                'mdp' => null,
            ],
            [
                'id_annonce' => 2,
                'id_categorie' => 1,
                'id_sous_categorie' => 2,
                'id_annonceur' => 5,
                'id_departement' => 7,
                'prix' => 49.90,
                'date' => '2024-02-10',
                'titre' => 'Lampe industrielle',
                'description' => 'Lampe style industriel à vendre',
                'ville' => 'Metz',
                'mdp' => null,
            ]
        ];
    }

    public function testAnnonceArrayStructure(): void
    {
        foreach ($this->annonces as $annonce) {
            $this->assertArrayHasKey('id_annonce', $annonce);
            $this->assertArrayHasKey('titre', $annonce);
            $this->assertArrayHasKey('prix', $annonce);
            $this->assertIsNumeric($annonce['prix']);
            $this->assertIsString($annonce['titre']);
        }
    }

    public function testTotalAnnonceCount(): void
    {
        $this->assertCount(2, $this->annonces);
    }
}
