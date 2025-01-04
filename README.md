
Description

Il s'agit d'une API RESTful construite avec Symfony qui gère les données des produits. Elle permet d'effectuer des opérations CRUD sur les produits. L'API prend en charge l'authentification des utilisateurs via JWT, offrant un accès sécurisé aux points de terminaison.

C'est une API RESTful qui gère une liste de produits, avec un affichage simple côté client utilisant Twig.

 Installation
       Prérequis :
         - PHP 8.0 ou supérieur
         - Composer
         - Symfony CLI
         - MySQL ou toute autre base de données relationnelle

 Étapes pour exécuter localement

1. Clonez le dépôt :

    Dans le terminal :
   ```bash
   git clone https://github.com/Inas-Mk/product-api.git
   cd product-api

3. Installez les dépendances :

     composer install
   
5. Configurez votre fichier d'environnement :
   - Copiez `.env.example` en `.env` et configurez les identifiants de la base de données.
 

     ```bash
       cp .env.example .env
  
6. Créez et migrez la base de données :
   Dans le terminal :
   
            php bin/console doctrine:database:create
            php bin/console doctrine:migrations:migrate
  
8. Installez le serveur web et démarrez le serveur local Symfony :

   ```bash
             symfony server:start

10. L'API devrait maintenant être accessible à `http://127.0.0.1:8000`.

Points de terminaison de l'API

 1. GET /api/products
   - Récupère la liste de tous les produits.

 2. POST /api/products
   - Crée un nouveau produit.
   - Corps de la requête :
     ```json
     {
       "name": "Nom du produit",
       "price": 100
     }
     ```

 3. PUT /api/products/{id}
   - Met à jour un produit existant par son ID.
   - Corps de la requête :
     ```json
     {
       "name": "Nom du produit mis à jour",
       "price": 120
     }
     ```
     
4. DELETE /api/products/{id}
   -  Supprime un produit par son ID.
