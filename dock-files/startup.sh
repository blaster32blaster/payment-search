#!/bin/bash
ENV=.env
EXAMPLE=.env.example
    if [ -f "$ENV" ]
    then
        echo "$ENV exists, not creating"
    else
        echo "$ENV doesn't exist, checking for example to copy ..."
        if [ -f "$EXAMPLE" ]
        then
            echo "$EXAMPLE does exist, copying to .env"
            cp .env.example .env
        else
            echo ".env.example not found, .env not created"
        fi
    fi

echo "running composer install"
composer install

echo "generating app key"
php artisan key:generate

echo "remove echo server lock"
rm laravel-echo-server.lock

echo "starting supervisor"
service supervisor start %

echo "starting laravel echo server"
supervisorctl reread
supervisorctl update

echo "running migrations"
php artisan migrate:install
php artisan migrate

echo "creating filesystem link"
php artisan storage:link

echo "create search index"
php artisan elastic:create-index "App\MyIndexConfigurator"

apachectl -D FOREGROUND
