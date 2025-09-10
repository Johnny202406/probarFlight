# Imagen base de PHP con CLI
FROM php:8.2-cli

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de la app
WORKDIR /app

# Copiar código de la app
COPY . .

# Instalar dependencias PHP desde composer.json
RUN composer install --no-dev --optimize-autoloader

# Exponer puerto dinámico
EXPOSE 10000

# Comando de inicio (Render pasa $PORT automáticamente)
CMD php -S 0.0.0.0:$PORT index.php
