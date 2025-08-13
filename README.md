<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## COMANDOS PARA HABILITAR EL PROYECTO

        composer install
        npm install
        copy .env.example .env

Crea la base de datos "digirest" en MySQL y luego ejecutamos los siguientes comandos:

        php artisan migrate
        php artisan key:generate
        php artisan storage:link

Creas un usuario admin para prueba:

        php artisan make:filament-user

Ejecutas el proyecto con los siguientes comandos:

        php artisan serve
        npm run dev
