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

https://drive.google.com/file/d/12IPtrswrncGUtsIz_-GoeRbXYJ-k6n5m/view?usp=sharing



retrieve all posts 
GET http://localhost:8000/posts

https://drive.google.com/file/d/1qEMyM22zoD1RKLSibBl4LT9_KDe2q7ei/view?usp=sharing




search comments -  params : name, body and email
POST http://localhost:8000/comments

https://drive.google.com/file/d/1qGUW6zB_lzAjRU4CVqWiuqS3QydPTKXA/view?usp=sharing



enjoy!


