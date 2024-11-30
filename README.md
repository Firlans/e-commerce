# documentasi instalasi project

## prerequisite
### - php 8xx
### - nodejs 20
### - npm 10
### - laravel 11

## first step
### - composer install
### - npm install
### - cp .env.example .env
### - php artisan key:generate

## migrasi database
### - touch ./database/database.sqlite
### - php artisan migrate

## buka 2 terminal untuk jalankan 2 perintah ini
### - php artisan serve
### - npm run dev