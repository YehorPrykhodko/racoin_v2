# Racoin v2 — Exercice refactoring

## 1 - Mise en place de tests
Mise en place de PHPUnit et ajout de tests unitaires de base (`ArticleTest`).

## 2 - Architecture
Réorganisation du projet selon une structure PSR-4 (`src/Controller`, `src/Model`, etc.).

## 3 - Mise à jour des packages
Migration vers Slim 4 avec DI-container. Configuration de base dans `index.php` et `web.php`.

## 4 - Amélioration du code
Application partielle des standards PHP 8 avec Rector (type hinting, strict types, etc.).

## 5 - Réfactorisation
Début de la migration des anciens fichiers vers des contrôleurs modernes. Intégration d’un contrôleur `AnnonceController` relié à la base de données.