# churrasco-garantido-php
Projeto backend do churrasco garantido desenvolvido com PHP7

## Installing composer dependencies

```
php composer.phar install
```

## Generating the encryption key

```
php artisan key:generate
```
You need to create a .env file with the APP_KEY variable containing the key


## Generating the `vendor/autoload.php` file

```
composer dump-autoload
```

## Running the tests

```
./phpunit --bootstrap vendor/autoload.php tests
```

## Running a database container

```
docker-compose up
```

## Running the server

```
php artisan serve
```

## Database:

### Migrating the database

```
php artisan migrate
```

### Seed the database

```
php artisan db:seed
```

### Create a new migration

```
php artisan make:migration create_table_users --create=users
```

### Execute a rollback

```
php artisan migrate:rollback
```