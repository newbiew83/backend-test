Setup step:

composer install

change .env file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=<db port>
DB_DATABASE=<db name>
DB_USERNAME=<db username>
DB_PASSWORD=<db password>

php artisan migrate --seed

php artisan serve

enjoy!
