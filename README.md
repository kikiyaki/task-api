## Quick start
- Run ```$ sudo docker-compose -f docker-compose.dev.yml up -d```
- Run migrations ```$ sudo docker exec tasks-php-fpm php artisan migrate```
- Seed db ```sudo docker exec tasks-php-fpm php artisan db:seed --class=TasksTableSeeder```
- Server is running on localhost/

## Adminer
- Adminer is running on localhost:8085
- Host ```pgsql```, user ```tasks```, password ```tasks123``` by default