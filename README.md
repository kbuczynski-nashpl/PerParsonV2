# PerParson CRM System

## Local Development
PerParson works with docker to run the MariaDB instance. Please make sure you have newest version
of docker installed on your machine.

Please make sure you have run `composer install` and `npm install` to bring dependencies in.

The `docker-compose.yml` file uses local `.env` file to borrow few variables for the database setup

Run docker (detached)
```bash
docker-compose up -d
```

To run local development just invoke serve command with laravel CLI.  
```bash
php artisan serve
```


## Migrations
Please execute those commands to create all needed tables to run the application.

***PerParson Tables***
```bash
php artisan migrate
```

***Passport Tables/Installation***
```bash
php artisan passport:install
```
