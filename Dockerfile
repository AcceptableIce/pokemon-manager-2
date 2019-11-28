FROM toninho09/laravel:7.0

RUN apt-get update && \
		apt-get install -y zip unzip && \
		composer self-update

ADD . /var/www/laravel

WORKDIR /var/www/laravel

RUN composer install --prefer-dist -vvv

RUN chmod -Rvc 777 app/storage

RUN php artisan clear-compiled && \
		composer dump-autoload && \
		php artisan optimize
# ADD ./public /var/www/html