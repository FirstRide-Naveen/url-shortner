## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Steps to setup application to your localhost

1) Clone project in any drive where u want to keep document root.
2) Clone using git hub application.
3) Enable opensll in php.ini in php folder.
4) Install composer.
5) Locate Project folder containing composer.json in cmd and hit command 'composer install'
6) Go to C:\Windows\System32\drivers\etc, open hosts file using notepad(Run as administartor) and add your project name.
7) Go to D:\wamp\bin\apache\Apache2.4.4\conf\extra, open httpd-vhosts.conf and create virtual host for your project by mentioning project directory.
8) Create database 'url_shortner'.
9) Run 'php artisan migrate' in cmd by locating project folder which will create required table to run project
10) Restart server, and run your project.
11) Here we go, type any long URL and get shorten URL, by clicking it will take you to long url-website. 
