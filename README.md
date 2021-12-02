# Camo-DPS
 Docker container with: 'php8.0', 'phpmyadmin', 'nginx' and 'Mariadb'.
 Made for using a Macbook M1

## What is Camo-DPS
Camo-DPS is a docker environment in which users can run a web server with a database. The docker environment can be easily transferred and used on multiple systems. In this environment, everything is already linked to each other, so you don't have to change any settings and you can get started right away.

## Whats inside the docker container
 The docker container uses 4 services.
 * database_server: image: mariadb:latest
 * app
 * nginx: image: nginx:latest
 * phpmyadmin: image: phpmyadmin/phpmyadmin:latest

1. ##### database_server
 The database_server is used as database being inside the docker container. This database is run on the Mariadb database management system.
 The database host, username, and password are:
 * host: 'Database'
 * username: 'root'
 * password: 'Welkom01!'

2. ##### app
 App is used as PHP server. The php files that you want to deliver to the web server are in the folder: /src/public/

3. ##### nginx
 This service is used to set up a website with PHP support. See the 'nginx.conf' file for more information about the nginx service.

4. ##### phpmyadmin
 Phpmyadmin is used to get an easy overview of all the databases. This service is not required to be used, but it does make it easier.


## How to use
### Run the container
 Make sure you have downloaded and installed Docker.
 Once you got docker you can use these docker containers by running the command:

    $ docker-compose up

### Waring
 Before you put your own website in the directory, make sure that you have already opened the website before you delete / changing files. Otherwise, there may be problems connecting the database.

### Use files for further developments
#### Use your own index.* files
 To use your own index.* files you can delete the 'index.php' and put your files in the '/src/public' directory. To use the database you can use the files: 'db_connection.php' and 'db_connection_execute_sql.php'. The login details of the database are: username: **'root'** & password: **'Welkom01!'**. To be able to work in a database you have to use the function 'OpenCon' which you have to give one parameter what the name of the database should be. This function can be found in the script 'db_connection.php'

##### Execute .sql files from php 
 In the folder /src/assets/php/ there is a file called 'run_sql_script.php'. This file contains the code to run a sql script on the database via php. In that file a reference is made to '../sql/test.sql', you could modify this to run your own .sql script.

##### View database data on the webpage
 If you want to read data from the database there is a file called '/src/public/assets/php/view_data_db.php'. This describes how you can run a query and display the data on the website