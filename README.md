# churrasco-garantido-php
Projeto backend do churrasco garantido desenvolvido com PHP7

## Generate the `vendor/autoload.php` file

```
composer dump-autoload
```

## Database:

### Running a database container

```
docker-compose up
```

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

## Running the tests

```
./phpunit --bootstrap vendor/autoload.php tests
```

## Running the server

```
php artisan serve
```