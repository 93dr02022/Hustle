FROM php:8.1.8-fpm-alpine

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/


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

RUN apk add --no-cache \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev \
        freetype-dev \
        nodejs \
        npm

RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype
RUN docker-php-ext-install gd
RUN docker-php-ext-install bcmath

RUN apk add autoconf && pecl install -o -f redis \
&& rm -rf /tmp/pear \
&& docker-php-ext-enable redis && apk del autoconf

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# # Add user for laravel application

RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Set permissions
RUN chown -R www-data:www-data storage
RUN chmod -R 777 storage 
RUN chown -R www-data:www-data /var/www/storage
RUN chmod -R 777 /var/www/storage
RUN chown -R www-data:www-data docker
RUN chmod -R 777 storage bootstrap/cache
RUN chmod -R 777 ./

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY composer.json .
RUN composer install --optimize-autoloader
RUN composer update
# RUN php artisan migrate:status
#RUN php artisan migrate --force 
#RUN npm run production

RUN php artisan optimize

# Set up volume
VOLUME /var/www

# RUN php artisan queue:work database

CMD php artisan serve --host=0.0.0.0 --port 80