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
ENV DB_HOST=correcthustle-instance-1.cr8hsmkceq6e.us-east-1.rds.amazonaws.com
ENV DB_PORT=3306
ENV DB_DATABASE=riverr
ENV DB_USERNAME=admin
ENV DB_PASSWORD=Y9D#6!qY7NTro6^

# host: correcthustle-instance-1.cr8hsmkceq6e.us-east-1.rds.amazonaws.com
# username: admin
# password: Y9D#6!qY7NTro6^

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
ENV MAIL_HOST=mail.privateemail.com   
ENV MAIL_PORT=465
ENV MAIL_USERNAME=admin@correcthustle.com
ENV MAIL_PASSWORD=!DF-#4TWkibcCBr
ENV MAIL_ENCRYPTION=ssl
ENV MAIL_FROM_ADDRESS=admin@correcthustle.com
ENV MAIL_FROM_NAME=CorrectHustle

ENV AWS_ACCESS_KEY_ID=AKIA525LDBK2M3KUXK3R
ENV AWS_SECRET_ACCESS_KEY=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
ENV AWS_DEFAULT_REGION=us-east-1
ENV AWS_BUCKET=hustlebucket
ENV AWS_USE_PATH_STYLE_ENDPOINT=false


ENV PUSHER_APP_ID="1614884"
ENV PUSHER_APP_KEY="fd8e341790316fac7d06"
ENV PUSHER_APP_SECRET="25470c458b9e0544d804"
ENV PUSHER_HOST=
ENV PUSHER_PORT=443
ENV PUSHER_SCHEME=https
ENV PUSHER_APP_CLUSTER="us2"

ENV VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
ENV VITE_PUSHER_HOST="${PUSHER_HOST}"
ENV VITE_PUSHER_PORT="${PUSHER_PORT}"
ENV VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
ENV VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

ENV PAYSTACK_PUBLIC_KEY="pk_test_ac11e590ba2a641bff759f0dce17ee04a3f59cd1"
ENV PAYSTACK_SECRET_KEY="sk_test_b950524a98be8c4269643f7dcd36f28f4c6f0719"
ENV PAYSTACK_PAYMENT_URL="https://api.paystack.co"
ENV PAYSTACK_MERCHANT_EMAIL="afuwapesunday12@gmail.com"
ENV FIREBASE_SERVER_KEY="AAAAWCsv5As:APA91bEjwrBcIEf1lvHYHEfA--66sZOOCrauHTDTSPcosj7pfKLw5gh4vLDaOQb32w2nDyhxEclIc-U77YOePpYGu_794YzVBZ5Kz8-cDMTU9I2dGsHbn3fEhrJ_Lc61Cx5BfKkU57jf"

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
RUN composer install --no-scripts
# RUN php artisan migrate:status
RUN php artisan migrate --force 
#RUN npm run production

RUN php artisan optimize

# Set up volume
VOLUME /var/www

#RUN php artisan queue:work database
CMD php artisan serve --host=0.0.0.0 --port 80