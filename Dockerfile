FROM php:8.1.8-fpm-alpine

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

ENV APP_NAME=Laravel
ENV APP_KEY=base64:8t9ohNUmhh7JGVCbewZBXV2sVC1Vsv+M9JyO6/hv4+s=
ENV APP_DEBUG=true
ENV APP_URL=http://localhost

ENV LOG_CHANNEL=stack
ENV LOG_DEPRECATIONS_CHANNEL=null
ENV LOG_LEVEL=debug

ENV DB_CONNECTION=mysql
ENV DB_HOST=host.docker.internal
ENV DB_PORT=3306
ENV DB_DATABASE=riverr
ENV DB_USERNAME=root
ENV DB_PASSWORD=123Dollar4@


ENV BROADCAST_DRIVER=log
ENV CACHE_DRIVER=file
ENV FILESYSTEM_DISK=local
ENV QUEUE_CONNECTION=sync
ENV SESSION_DRIVER=file
ENV SESSION_LIFETIME=120

ENV MEMCACHED_HOST=127.0.0.1

ENV REDIS_HOST=127.0.0.1
ENV REDIS_PASSWORD=null
ENV REDIS_PORT=6379

ENV MAIL_MAILER=smtp
ENV MAIL_HOST=mailhog
ENV MAIL_PORT=1025
ENV MAIL_USERNAME=null
ENV MAIL_PASSWORD=null
ENV MAIL_ENCRYPTION=null
ENV MAIL_FROM_ADDRESS="hello@example.com"
ENV MAIL_FROM_NAME="${APP_NAME}"

ENV AWS_ACCESS_KEY_ID=
ENV AWS_SECRET_ACCESS_KEY=
ENV AWS_DEFAULT_REGION=us-east-1
ENV AWS_BUCKET=
ENV AWS_USE_PATH_STYLE_ENDPOINT=false

ENV PUSHER_APP_ID=
ENV PUSHER_APP_KEY=
ENV PUSHER_APP_SECRET=
ENV PUSHER_HOST=
ENV PUSHER_PORT=443
ENV PUSHER_SCHEME=https
ENV PUSHER_APP_CLUSTER=mt1

ENV VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
ENV VITE_PUSHER_HOST="${PUSHER_HOST}"
ENV VITE_PUSHER_PORT="${PUSHER_PORT}"
ENV VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
ENV VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


RUN apk update && apk add \
    build-base \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    oniguruma-dev \
    curl

RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring zip exif pcntl
#RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Add user for laravel application

RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www


ENV COMPOSER_ALLOW_SUPERUSER=1

COPY composer.json .
RUN composer install --no-scripts
RUN php artisan migrate:status
RUN php artisan migrate --force
RUN php artisan optimize

CMD php artisan serve --host=0.0.0.0 --port 80