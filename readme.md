<<<<<<< Updated upstream
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
	
=======
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.
>>>>>>> Stashed changes

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
