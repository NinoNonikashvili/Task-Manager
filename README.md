
<div style="display:flex; align-items: center">
  <h1 style="position:relative; top: -6px" >Task Manager</h1>
</div>


#
### Table of Contents
* [Introduction](#introduction)
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Deployment](#deployment)
* [Resources](#resources)


#
### Introduction

CRUD application where anyone can register and manage her tasks. User can cerate, update, delete tasks. also see old tasks and delete all of the old tasks. User Profile is also editable and user can change password as well as profile and cover photos.

#
### Prerequisites

* <img src="https://pngimg.com/uploads/php/php_PNG43.png" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
* <img src="https://tse1.mm.bing.net/th?id=OIP.lIIc_svaWdGdEJuEk7TBlgHaHa&pid=Api&P=0&h=220" width="35" style="position: relative; top: 4px" /> *MYSQL@8 and up*
* <img src="https://tse2.mm.bing.net/th?id=OIP.mmXEW6CkG5NfwwM3UdzXcwHaHa&pid=Api&P=0&h=220" width="35" style="position: relative; top: 4px" /> *npm@6 and up*
* <img src="https://tse1.mm.bing.net/th?id=OIP.mFob_nJmwmMPrR4V7M9sAQHaJz&pid=Api&P=0&h=220" width="35" style="position: relative; top: 6px" /> *composer@2 and up*


#
### Tech Stack

* <img src="https://tse3.mm.bing.net/th?id=OIP.Hh_tEbIb4-MagJsV6x_RZwHaHa&pid=Api&P=0&h=220" height="18" style="position: relative; top: 4px" /> [Laravel@10.x](https://laravel.com/docs/10.x/) - back-end framework
* <img src="https://tse4.mm.bing.net/th?id=OIP.ZhWqi2uj6eYs2JwgV_bJRQAAAA&pid=Api&P=0&h=220" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation
* <img src="https://tse3.mm.bing.net/th?id=OIP.LDVb9ft-722buvy-Zdm51wHaE8&pid=Api&P=0&h=220" height="19" style="position: relative; top: 4px" /> [Alpine Js] (https://alpinejs.dev/) - package for JS useage

#
### Getting Started
1\. First of all you need to clone Task Manager repository from github:
```sh
git clone https://github.com/RedberryInternship/task-manager-nino-nonikashvili.git
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to build your JS/css resources.

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****



other variables can be set to default.





##### Now, you should be good to go!

#
### Create User
if you've completed getting started section, now you have to execute command from terminal to create user:
```sh
php artisan task-manager:create-user
```
It will ask you to provie email and password and as long as you provide valid data it creates user.

#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```


#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

when working on JS you may run:

```sh
  npm run dev
```
it builds your js files into executable scripts.
If you want to watch files during development, execute instead:

```sh
  npm run watch
```
it will watch JS files and on change it'll rebuild them, so you don't have to manually build them.


#
### Deployment
<!-- TO DO --> 



#
### Resources

* [Figma Design](https://www.figma.com/file/HkL8NHL7914PBgdYb6D3zN/Laravel-Dev?type=design&node-id=32-3592&mode=design&t=lYo5IsAUs3tQT6ay-0)
* DataBade Diagram
 <img src="/readme/drawSQL-image.png" width="600" style="position: relative; top: 4px" /> 

