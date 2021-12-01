# Camo-DPS
 Docker container with: 'php8.0', 'phpmyadmin', 'nginx' and 'Mariadb'.
 Made for using a Macbook M1


## Whats inside the docker container
 The docker container uses 4 services.
 * database_server: image: mariadb:latest
 * app
 * nginx: image: nginx:latest
 * phpmyadmin: image: phpmyadmin/phpmyadmin:latest

#### database_server
 The database_server is used as database being inside the docker container. This database is run on the Mariadb database management system.
 The database host, username, and password are:
 * host: 'Database'
 * username: 'root'
 * password: 'Welkom01!'

#### app
 App is used as PHP server. The php files that you want to deliver to the web server are in the folder: /src/public/

#### nginx
 This service is used to set up a website with PHP support. See the 'nginx.conf' file for more information about the nginx service.

#### phpmyadmin
 Phpmyadmin is used to get an easy overview of all the databases. This service is not required to be used, but it does make it easier.


## How to use
### Run the container
 Make sure you have downloaded and installed Docker.
 Once you got docker you can use these docker containers by running the command:

    $ docker compose up


### Use files for further developments
##### Execute .sql files from php 
 In the folder /src/assets/php/ there is a file called 'run_sql_script.php'. This file contains the code to run a sql script on the database via php. In that file a reference is made to '../sql/test.sql', you could modify this to run your own .sql script.

##### View database data on the webpage
 If you want to read data from the database there is a file called 'view_data_db.php'. This describes how you can run a query and display the data on the website