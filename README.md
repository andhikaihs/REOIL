# Reoil

## Requirements
- PHP 8.0 or 8.1
- XAMPP
- Laravel 9
- Composer

## How to use
- Clone the repository
- Open the project folder in terminal
- Run this code to install the dependencies
```
composer install
```
- Run XAMPP and start Apache and MySQL
- Open a browser and go to http://localhost/phpmyadmin
- Create a database named "reoil"
- Rename the .env.example file to .env
- Configure the .env file as follows
```
DB_CONNECTION=mysql
DB_HOST={db host}
DB_PORT={db port}
DB_DATABASE=reoil
DB_USERNAME=root
DB_PASSWORD={root password}
```
- Run this code
```
php artisan migrate
php artisan db:seed
php artisan serve
```
- Open a browser and go to http://localhost:8000
- Enjoy the app
