Workshop Php RabbitMq
=====================

# Requirement

- Php 7.1 (https://secure.php.net/releases/7_1_0.php)
- Docker (https://www.docker.com/)
- Composer (https://getcomposer.org/)
- Git (https://git-scm.com/)

# Install
```
docker run -d --hostname rabbit --name rabbit -p 8080:15672 -p 5672:5672 rabbitmq:3.7.4-management-alpine
composer install
php -S 127.0.0.1:8000 -t public
```

# Workshop

Build with Symfony4 && Rabbitmq (https://www.rabbitmq.com/, http://symfony.com/)

- Example with php-amqplib/RabbitMqBundle

```
# http://localhost:8000/task
./bin/console rabbitmq:consumer task
```
- Example with Messenger Component
``` 
# http://localhost:8000/messenger
./bin/console messenger:consume-messages default
```