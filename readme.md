--Git Configuration--

//Enter Git User Name
git config --global user.name "Tofy Zubair"

//Enter Git Email address
git config --global user.email "tofy.zubair@gmail.com"

// Clone Git repository
git clone https://gitlab.com/theteam2017/supercars.git

___________________

--installing Composer--

___________________

--Check for latest versions of Software--

composer -v
php -v

___________________

--Creating a Laravel Project Via Composer Create-Project--

composer create-project --prefer-dist laravel/laravel supercars

___________________

--Local Development Server--
php artisan serve

//serve to a specific ip and port
php artisan serve --host 192.168.100.6 --port 80

___________________

--Pull from Master branch--

// pull request
git pull
___________________

--Commit Changes to Master branch--

// Getting initial status
git status

//Adding all files in directory
git add .

//check for status again
git status

//Commit changes and add message
git commit -m "Laravel Message"

//check for status again
git status

//push to master
git push origin master

____________________

--Laravel Migration--
//find more on : https://laravel.com/docs/5.4/migrations

//create table
$ php artisan make:migration create_cars_table

//Navigate to : database>migrations to see created files
//add fields in the "public function up()"

//migrating tables to database
php artisan migrate

//Overwriting tables
php artisan migrate:refresh

//Removing all tables from database
php artisan migrate:reset
____________________

--Laravel Collective--

//Use laravelcollective to create forms etc...
composer require laravelcollective/html

//Add to config/app.php in the providers array
Collective\Html\HtmlServiceProvider::class,

//Add to config/app.php in the aliases array
'Form' => Collective\Html\FormFacade::class
____________________

--Laravel CRUD--

//Creating a controller with resource files
php artisan make:controller CarController --resource

//Creating the model
php artisan make:model Car

//Adding a route for the controller in the web.php file in the routes folder
Route::resource('/car', 'CarController');

//Adding views
Create a folder "car" in the "views" folder
Add the File:
create.blade.php
edit.blade.php
index.blade.php
show.blade.php

____________________

--Validation of forms--

//Adding a Request
php artisan make:request CreateCategoryFormRequest

//change authorize to true
public function authorize()
{
    return true;
}

//add required rules
return [
      'car_name' => 'required'
    ];

//In the Controller update the store action to accept a $request object of type CreateCarFormRequest
public function store(CreateCarFormRequest $request)
{
    ...
}

//In the Controller update the update action to accept a $request object of type CreateCarFormRequest
public function update(CreateCarFormRequest $request)
{
    ...
}

____________________
--Important Links--
//Creating and Validating a Laravel 5 Form: The Definitive Guide
http://www.easylaravelbook.com/blog/2015/08/17/creating-and-validating-a-laravel-5-form-the-definitive-guide/

//default error messages used by the validator class in laravelcollective
https://github.com/LaravelCollective/laravelcollective.com/blob/master/resources/lang/en/validation.php

//Form Category
http://laravel-recipes.com/categories/21

//Dynamically Populating a Laravel Dropdown Box
http://www.easylaravelbook.com/blog/2015/03/30/dynamically-populating-a-laravel-dropdown-box/

//LaravelCollective documentation
https://laravelcollective.com/docs/5.3/html

//Create Form Elements Using Laravel and Bootstrap
http://vegibit.com/create-form-elements-using-laravel-and-bootstrap/

//Processing File Uploads With Laravel 5
http://www.easylaravelbook.com/blog/2015/04/08/processing-file-uploads-with-laravel-5/

//Laravel Form Requests and Custom Error Messages
http://www.easylaravelbook.com/blog/2015/03/10/laravel-form-requests-and-custom-error-messages/

//Creating a Contact Form in Laravel 5 Using the Form Request Feature
http://www.easylaravelbook.com/blog/2015/02/09/creating-a-contact-form-in-laravel-5-using-the-form-request-feature/
____________________

<br>
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
