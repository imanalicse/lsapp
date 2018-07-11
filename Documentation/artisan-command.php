<!-- Controller create command -->
php artisan make:controller PagesController
php artisan make:controller PostsController --resouce
<!-- 
    Model create command -m for migration    
-->
php artisan make:model Post -m

<!-- Migration command -->
php artisan migrate

<!-- Tinker command -->

php artisan tinker

php artisan route:list

php artisan make:auth

<!-- for error 
In ClassLoader.php line 440:
 -->
composer dumpautoload