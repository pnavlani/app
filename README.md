## Pràctica 7: Migració PHP Natiu a Laravel
El proposit d'aquesta pràctica es en fer la pràctica 5 de PHP al framework de Laravel. Entenent que Laravel utilitza una arquitectura de MVC utilitzant ELOQUENT com ORM per gestionar Base de Dades como objectes i Blade com sistema de plantilles.

- Per començar vaig acudir al fitxer .env per poder declarar les variables del entorn del nostre projecte com connexió a la Base de Dades o el nom de la nostra aplicació.

- Per crear una Ruta ens anem a la carpeta de routes/web.php o routes/api.php.

- Per crear Controlador vaig utilitzar la següent comanda per terminal: "php artisan make:controller TaskController".

- Per crear Model vaig utilitzar la següent comanda per terminal: "php artisan make:model Task".

- En tema funcionalitat primer de tot vaig anar a la base de dades i vaig omplir dades per poder comprovar si em mostrava els aticles en paginació a la pagina de index anonim.

- En el cas de disseny i com la part de Registrar i Iniciar Sessió vaig aplicar el Breeze, ja que Laravel Breeze es una implementació minima i simple de totes les caracteristiques de autenticació de Laravel.
Vaig utilitzar les següents comandes per poder adquirir el Breeze:

*    Instal·lar Laravel Breeze usando Composer

 composer require laravel/breeze --dev

* Comanda breeze:install

    php artisan breeze:install
        php artisan migrate
        npm install
        npm run dev
*    Instal·lar Laravel Breeze usando Composer

 composer require laravel/breeze --dev



