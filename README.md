# basic fake api

basic fake api for using in Educational project Or ... <br>
after install [composer](https://getcomposer.org/) & clone [project](https://github.com/Amirhossein256/simple-fake-api.git) :
##.evn

Rename .env.example To .env

##database 
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

## Installation

Use the package manager [composer](https://getcomposer.org/) to install Laravel.<br>
```bash
composer install 
```

Run 
```bash
php artisan key:generate
```
Run migrate for create database's
```bash
php artisan migrate
```
Run laravel database [seeder](https://laravel.com/docs/9.x/seeding)
```bash
php artisan db:seed
```
Serve project
```bash
php artisan serve
```

### Go to http://localhost:8000/

enjoy !
