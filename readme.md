Setup step:

composer install

change .env file

DB_PORT=<db port>
DB_DATABASE=<db name>
DB_USERNAME=<db username>
DB_PASSWORD=<db password>

php artisan migrate --seed

php artisan serve


retrieve single post
GET http://localhost:8000/posts/{post_id}

retrieve all posts 
GET http://localhost:8000/posts

search comments -  params : name, body and email
POST http://localhost:8000/comments
 

enjoy!
