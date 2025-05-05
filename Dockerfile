# Utiliser une image PHP avec Apache
FROM php:8.2-apache

# Copier le contenu dans le dossier web d’Apache
COPY . /var/www/html/

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80
