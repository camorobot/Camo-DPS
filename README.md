# Camo-DPS
 Docker container with: 'Php8.0', 'phpmyadmin', 'nginx' and 'Mariadb'
 gemaakt voor het gebruik van een Macbook M1


## Whats inside the docker container
    In de docker container word gebruik gemaakt van 4 services.
    * database_server: image: mariadb:latest
    * app
    * nginx: image: nginx:latest
    * phpmyadmin: image: phpmyadmin/phpmyadmin:latest

    **database_server**
    De database_server word gebruikt als database zijnde in de docker container. Deze database word gedraaid op de Mariadb databasemanagementsysteem. 
    De host, gebruikersnaam en wachtwoord van de database zijn:
    * host: 'Database'
    * username: 'root'
    * password: 'Welkom01!'

    **app**
    App word gebruikt als php server. De php bestanden die je wilt leveren aan de webserver staan in de folder: /var/www/public/

    **nginx**
    Deze service word gebruikt om een website op te zetten met php support. Bekijk het 'nginx.conf' bestand voor meer informatie over de nginx service

    **phpmyadmin**
    Phpmyadmin word gebruikt om een makkelijk overzicht te krijgen van alle databases. Deze service is niet verplicht om gebruikt te worden, maar het maakt het gebruik er van wel makkelijker.

## How to use
    Om deze docker containers te gebruiken kan je de command: **docker compose up** draaien en worden containers gestart en ingericht.

