# PHP 8.2 Apache base image
FROM php:8.2-apache

# Sistem paketlerini güncelle ve gerekli paketleri yükle
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# PHP eklentilerini yükle
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    zip \
    pdo_mysql \
    mysqli

# Apache modüllerini etkinleştir
RUN a2enmod rewrite
RUN a2enmod headers

# Çalışma dizinini ayarla
WORKDIR /var/www/html

# Apache yapılandırmasını güncelle
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Apache'nin .htaccess dosyalarını kullanmasına izin ver
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Apache'nin varsayılan dizinini değiştir
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Uygulama dosyalarını kopyala
COPY . /var/www/html/

# Dosya izinlerini ayarla
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 777 /var/www/html/assets

# Apache'yi ön planda çalıştır
CMD ["apache2-foreground"] 