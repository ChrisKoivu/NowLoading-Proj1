# Now Loading Making Strides for Autism Helpdesk System App

This is our Team Project Assignment. The project implements an 
MVC architecture using the Laravel php framework. 
The database used is PostgreSQL and the cloud server is Heroku.

# Setup Development Environment

To develop this project, we need to setup the PHP development environment.

# Windows
For Windows, download Wampserver. It has your full stack which is Apache, MySQL, and PHP, and including PHPMyAdmin, a graphical database manipulation application.
http://www.wampserver.com/en/

# Linux
For Linux, install a Lamp stack, which is Apache, MySQL, and PHP. Make sure you include PHPMyAdmin. These steps will work with Ubuntu 18.04
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

# Mac
For Mac, install Mamp, It has your full stack which is Apache, MySQL, and PHP, and including PHPMyAdmin, a graphical database manipulation application.
https://www.mamp.info/en/

# Composer
Install Composer https://getcomposer.org/download/

After installing per the directions, run this command: 

    mv composer.phar /usr/local/bin/composer 

now you can type 'composer' to run on the command line.

# Install Laravel

make sure your PHP installation has these requirements:

* PHP >= 7.1.3 
* OpenSSL PHP Extension 
* PDO PHP Extension 
* Mbstring PHP Extension 
* Tokenizer PHP Extension 
* XML PHP Extension 
* Ctype PHP Extension 
* JSON PHP Extension

MAMP & Wampserver will take care of these requirements

type this command to create the laravel app, replace 'projectname' with the name of the application
    
    composer create-project --prefer-dist laravel/laravel projectname

# Git Note
    Please create your own branch for development. Then the development branches can be 
    merged into the master for the final project.
    
   
# Entering your Database credentials
* Locate the .env.example file in your root and update 
  this section to match your database credentials:
    
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE= Your Database Name
        DB_USERNAME= Your Database User Name
        DB_PASSWORD= Your Database User's password
    
Then save the file as .env

# Build the Database
* Build database by entering 

        php artisan migrate
    

# Seeding the Database
* Seed status table by entering:

        php artisan db:seed
   
# Where to find the Model, View, and Controller files
* Controllers are stored in app/Http/Controllers
* Models are stored in the app folder, ex. User.php
* Views are stored in the resources/views folder in a folder 
corresponding to the controller name
* All migrations, factories, and seeds files are located in the 
database folder

# Troubleshooting the Controller methods
* to troubleshoot the request data being sent to
  the controller methods, enter:
	
	dd($request->all());
	


