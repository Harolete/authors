# Microservicio Authors

[![Build Status](https://app.travis-ci.com/Harolete/authors.svg?branch=master)]()

Este microservicio forma parte de la arquitectura de (https://github.com/Harolete/ApiGateway) siendo el apigateway punto de acceso
principal.

## Configuración del proyecto

## Notas personales (Lumen)
#### 1) Migraciones de la DB

    php artisan make:migration CreateAuthorsTable --create=authors

Esto crea el archivo CreateAuthorsTable en database/migrations donde están las funciones up y down que crean y destruyen
la tabla authors en la db.

#### 2) Especificado de columnas de la tabla 
Dentro de la clase creada con el comando anterior, se modifica el Schema::create dentro de "up" en función a las columnas que necesitemos en cada tabla.

#### 3) Creación de las tablas
    php artisan migrate 
Modificará el archivo "database.sqlite" con los  datos binarios de cada tabla.

#### 4) Creación del modelo
Lumen trae un modelo base en app/User.php

Se crea los modelos necesarios para el proyecto tomando User.php como ejemplo.

#### 5) Creación del factory
Lumen ya trae un ModelFactory en database/factories
Se modifica la función define dependiendo de lo que se necesite crear

#### 6) Creación de modelos al azar para llenar la DB
    php artisan db:seed
Esto ejecuta DatabaseSeeder ubicado en database/seeds.
Esta clase llama al factory para que cree las instancias determinadas en la funcion run