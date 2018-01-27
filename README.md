# sustAdmissionHelpline
A Simple Laravel(5.5) web application that help students during University admission time
4.	How to host the project.

•	 Install the xamp from these link:   https://www.apachefriends.org/download.html

•	Start Apache and MySql

•	Install composer from these link: https://getcomposer.org/download/

•	Set-up composer path.

•	Open cmd terminal

1.. git clone  https://github.com/MinhazulKabir/sustAdmissionHelpline.git  projectname

Or

Download project as a zipped file.

2.. cd projectname

03.. composer install

04.. php artisan key:generate

05.. copy .env.example .env

•	Open a tab from the browser and go to http://localhost/phpmyadmin link to create a database.

•	if you use MySQL in .env file :

01..set DB_DATABASE name

02..set DB_USERNAME name 

03..set DB_PASSWORD

•	You find a database name sustAdmissionHelpline.sql. You my import database.

•	If you don’t import Database. Then, open cmd terminal 

01..php artisan migrate –seed

02..php artisan serve

•	Then go to browser and open a tab with the url http://localhost:8000 . The project will be run.

•	To visit the admin panel, visit http://localhost:8000/login

•	For admin:

Email: admin@admin.com

Passoword: password

•	N.B., If project do not run the do the following things. 

•	Clear the cache with the following command by opening the command prompt under the SCDN folder. 

01..php artisan config:cache

02..php artisan config: clear

Then run the project again by “php artisan serve” command. 

•	If the 8000 port does not work then change it. 

Then run the project again by “php artisan serve” command.


# Developer Document:

	Using Software and framework: 

	Laravel  5.5 (PHP frame work), Mysql (Database) , HTML5 , JvaScript, CSS , Botstrap 3.3, Xamp , Apache, Composer, Adminlte,

	You can modify admin email and password in yourProjectFolder\database\seeds\UserSeed.php

	I am using laravel 5.5 you can update that if possible.

	If you fail any problem, simply contact with me: kabir110409@acc.edu.bd 

	You can update home page manually, because this is a static page

	You can  update home/guideline for user page page manually, because this is a static page

	You can modify background  in yourProjectFolder\database\public\css\ shop-homepage.css




# User Document

Transport: Select your starting point and ending point. Hit enter button. Then, you will find the route in google map.

Association: You can find your expected association. If you don’t find , then you can type your district name on the upper right side. Then If you don’t find, simply contact with me: kabir110409@acc.edu.bd 

Hotel: You can find your expected association. If you don’t find , then you can type your expected name on the upper right side. Then If you don’t find , simply contact with me: kabir110409@acc.edu.bd 

Restaurant: You can find your expected association. If you don’t find , then you can type your expected name on the upper right side. Then If you don’t find , simply contact with me: kabir110409@acc.edu.bd 





# License:

This App is not for only SUST you may use it in your education institution. Please use and re-use however you want.
