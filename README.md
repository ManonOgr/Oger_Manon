# Projet 2 : <span style="color:#66EB9A ">We Fashion</span>

### PRÉSENTATION

Vous avez été recruté comme développeur par Edouard, directeur de We Fashion, une nouvelle boutique de e-commerce qui vend des vêtements homme et femme de créateurs. L'objectif de votre travail est de développer la plateforme We Fashion pour qu'elle devienne multicanal. Le développement est interne et utilise le framework Laravel et la base de données MySQL côté serveur.

## Prérequis

-   Avoir un mamp ou wampp ou xampp ou lamp d'installé avec PHP v.8 minimum

## Installation

1. Cloner le projet dans un dossier htdoc de votre server.
2. Rentrer dans le dossier en faisant : `cd Oger_Manon` et ouvrer le projet dans l'éditeur.
3. À la racine du projet créer un fichier `.env` identique au `.env.example`
    - **Vérifier :**
    - `APP_URL=htt://localhost:8000`
    - `DB_DATABASE=we_fashion`
    - D'avoir bien configurer `DB_DATABASE` `DB_USERNAME` `DB_PASSWORD` suivant votre configuration.
4. Tapez les commandes suivantes:
    - `npm i`
    - `php artisan migrate --seed` accepter le warning pour installer la base de données 'we_fashion'. La BDD devrait se remplir de produits.
    - `php artisan storage:link` pour créer un lien accessible au navigateur des images enregistrer dans l'application.
    - `php artisan serve` et dans un autre onglet `npm run dev`.
    - Le site devrait être accessible à l'adresse <a href="http://localhost:8000">http://localhost:8000</a>.
    - il est possible d'avoir un message d'erreur la première fois. L'erreur sugère de générer une `APP_KEY` qu'il faudra accépter.


### Partie Admin

Accessible via cette url : <a href="http://localohost:8000/admin">http://localohost:8000/admin</a>
Si l'admin n'est pas encore connecté il sera redirigé sur la page de login.

Un admin de présentation à été créé :

-   email : edouard@doe.com
-   mot de passe: admin123

Une fois connecté l'administrateur est redirigé sur le dashboard.

## Représentation graphique de la base de données

-   Dans le dossier public vous trouverez un document pdf contenant le diagramme.
