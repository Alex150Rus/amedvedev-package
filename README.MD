## Краткое описание пакета
Учебный пакет для получения навыков создания пакетов

### Требования
php >= 8.0.0, composer и немного свободного времени

### Установка
composer install amedvedev/first-package

### Использование с примерами


### Доп. информация
Собрать контейнер: $ docker build -t my-php-app .

Запустить контейнер и смонтировать текущую директорию:
$ docker run -it -v ".:/data" --rm --name my-running-app my-php-app

Узнать id контейнера: $ docker ps

Подключиться к контейнеру через терминал
$ docker exec -it <container_id> /bin/bash