###REQUIREMENTS

- Define app.name on .env
- Define app.baseURL on .env
- Define database on .env

###SERVE

php spark serve
php spark serve --host=example.dev
php spark serve --php=/usr/bin/php7.6.5.4

###MIGRATIONS

php spark migrate
php spark migrate:create name_here
php spark migrate:refresh
