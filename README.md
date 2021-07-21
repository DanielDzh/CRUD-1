### Установка

Установить PHP-7.4+

Установить MySQL

Установить composer

cd /var/www

git clone https://github.com/DanielDzh/CRUD-1 folder

cd folder

composer install

define database, APP_KEY in .env

php artisan migrate --seed

php artisan serve