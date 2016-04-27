# Instalación AppAmino

+ Después de descargar o clonar el proyecto 

        $ cd nombreRepositorio

+ Ejecutar comando

        $ composer install
    
+ Modificar el nombre del archivo __.env.example.__ por __.env__ y agregar credenciales.

+ Script BD Mysql 
         Base de datos: `cinema`

+ Ejecutar las migraciones.
        $ php artisan migrate

+ Por ultimo generar una key .

         $ php artisan key:generate

+ ejecutar el proyecto.

        $ php artisan serve
