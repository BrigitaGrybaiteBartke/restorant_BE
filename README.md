# Backend part

It's an application created with PHP Laravel 9 framework as Backend part of the project. 

[Frontend part](https://github.com/BrigitaGrybaiteBartke/restorant_FE.git) of the project is created with JavaScript React library. 

To run the project Frontend and Backend parts of the projects must be started.


#### Project use and is created with:
* React library as frontent part
* Laravel 9 framework as backend part
* MySQL


#### Functionality
* user registration / user login
* registered user can create, update, delete content: restaurants/dishes
* Page content preview is possible without login.
* see all restaurants/dishes and updates from database



## Launch BackEnd part

* Clone repository as backend part: https://github.com/BrigitaGrybaiteBartke/restorant_BE.git
* Run XAMPP and Mysql database
* Open XAMPP htdocs folder - clone application code to this folder
* Install Composer locally in the current directory
* Create schema named **laravel** in MySQL Workbench
* Once opened cloned app folder with source-code editor run this command in terminal: 

```
php composer.phar install
```

* Change .envexample name to .env in your 
* Run migrations and seeders by typing:

```
php artisan migrate

php artisan db:seed
```

* To run the project:

```
php artisan serve
```

* To run project in React part follow the launch procedure here:



