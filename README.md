# Quick start
- docker-compose.yml is configured to remote deployment by default
- To run app on your localhost do the following
- Uncomment nginx, pgsql, adminer blocks in docker-compose.yml
- Comment out 'command' item in php-fpm block in docker-compose.yml
- Run ```$ sudo docker-compose up -d```
- By default server running on localhost/

# Adminer
- Adminer is running on localhost:8085
- Host ```pgsql```, user ```tasks```, password ```tasks123``` by default