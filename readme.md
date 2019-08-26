# <h1 style="color:blue">PAUL STANDLEY</h1>

![Profile Pick](http://res.cloudinary.com/pieol2/image/upload/v1516543296/profile-small.png)

---

## BASH

```BASH

$ composer create-project --prefer-dist laravel/laravel blog
$ composer update
$ php artisan preset react
$ npm install && npm run dev
$ npm run watch
$ php artisan make:controller PostsController --resource
$ php artisan make:auth
$ php artisan make:controller PagesController
$ php artisan make:model Post -m
$ php artisan migrate

$ php artisan tinker

Psy Shell v0.9.9 (PHP 7.2.12 — cli) by Justin Hileman
>>> App\Post::count()
=> 0
>>> $post = new App\Post();
=> App\Post {#2973}
>>> $post->title = 'Post One';
=> "Post One"
>>> $post->body = 'This is body One';
=> 'This is body One'
>>> $post->user_id = 0;
=> 0
>>> $post->save();
=> true
>>> quit
Exit:  Goodbye

$ php artisan route:list

+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method   | URI                    | Name             | Action                                                                 | Middleware   |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD | /                      |                  | App\Http\Controllers\PagesController@index                             | web          |
|        | GET|HEAD | about                  |                  | App\Http\Controllers\PagesController@about                             | web          |
|        | GET|HEAD | api/user               |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD | home                   | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST     | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
|        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
+--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+

+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
| Domain | Method    | URI                    | Name             | Action                                                                 | Middleware   |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
|        | GET|HEAD  | /                      |                  | App\Http\Controllers\PagesController@index                             | web          |
|        | GET|HEAD  | about                  |                  | App\Http\Controllers\PagesController@about                             | web          |
|        | GET|HEAD  | api/user               |                  | Closure                                                                | api,auth:api |
|        | GET|HEAD  | home                   | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
|        | GET|HEAD  | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
|        | POST      | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
|        | POST      | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
|        | POST      | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
|        | GET|HEAD  | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
|        | POST      | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
|        | GET|HEAD  | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
|        | GET|HEAD  | posts                  | posts.index      | App\Http\Controllers\PostsController@index                             | web          |
|        | POST      | posts                  | posts.store      | App\Http\Controllers\PostsController@store                             | web          |
|        | GET|HEAD  | posts/create           | posts.create     | App\Http\Controllers\PostsController@create                            | web          |
|        | GET|HEAD  | posts/{post}           | posts.show       | App\Http\Controllers\PostsController@show                              | web          |
|        | PUT|PATCH | posts/{post}           | posts.update     | App\Http\Controllers\PostsController@update                            | web          |
|        | DELETE    | posts/{post}           | posts.destroy    | App\Http\Controllers\PostsController@destroy                           | web          |
|        | GET|HEAD  | posts/{post}/edit      | posts.edit       | App\Http\Controllers\PostsController@edit                              | web          |
|        | POST      | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
|        | GET|HEAD  | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------+

$ composer require unisharp/laravel-ckeditor

$ php artisan vendor:publish --tag=ckeditor

$ php artisan make:migration add_cover_image_to_posts

$ php artisan migrate

$ php artisan storage:link

```
