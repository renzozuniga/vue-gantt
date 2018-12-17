# vue-gantt

After you clone this project, do the following:

```bash
# go into the project
cd vue-gantt

# create a .env file
cp .env.example .env

# install composer dependencies
composer update

# install npm dependencies
npm install

# create a local MySQL database (make sure you have MySQL up and running)
mysql -u root

> create database gantt;
> exit;

# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=gantt
DB_USERNAME=gantt
DB_PASSWORD=secret

# run the migration files to generate the schema
php artisan migrate

# run the seeders 
php artisan migrate:refresh --seed

# run webpack and watch for changes
npm run watch
```
