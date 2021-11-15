# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



## Notas
#####1) php artisan make:migration CreateAuthorsTable --create=authors
Esto crea el archivo CreateAuthorsTable en database/migrations donde están las funciones up y down que crean y destruyen
la tabla authors en la db.

#####2) Se modifica el Schema::create dentro de "up" en función a las columnas que necesitemos en cada tabla.

#####3) php artisan migrate 
Modificará el archivo "database.sqlite" con los  datos binarios de cada tabla.

#####4) Se crea el modelo
Lumen trae un modelo base en app/User.php
Se modifica esta clase segun lo que se necesite

#####5) Crear el factory
Lumen ya trae un ModelFactory en database/factories
Se modifica la función define dependiendo de lo que se necesite crear

#####6) php artisan db:seed
Esto ejecuta DatabaseSeeder ubicado en databsae/seeds.
Esta clase llama al factory para que cree las instancias determinadas en la funcion run