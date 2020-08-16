# ExamIngenia
App en Laravel

Este proyecto se realizo en Laravel, en el se pedian generar un login y registro de usuarios con diferentes datos como su dirección por lo cual implemente un apartado de empleados, dividiendo en 2 partes la prueba.

La primera al generar las migraciones se genera un usuario administrador con el correo USER -- > teresita.mora05@hotmail.com < -- PASSWORD -- > TereMora05 < --, con esto se genera un inicio de sesion para poder generar el alta de empleados y sus direcciones.
Tambien es posible generar un registro para poder iniciar una sesion y realizar el CRUD de empleados.

La base de datos se llama teresitamora, y esta configurada en el archivo .env, dentro del proyecto existe un archivo SQL para ver la estructura con algunos registros. Al ejecutar el proyecto se debe cambiar el archivo .env con los valores de nuestra BD, y al correr las migraciones se generan las tablas automaticamente.

Al descargar el proyecto se debera ejecutar en la consola por medio de composer la instalación ---- > composer install < --- 
Una vez instalado y configurado el archivo .env correctamente se debera ejecutar las migraciones para las BD --- > php artisan migrate < ---
Ya generado la migración de tablas se realiza la carga de datos que se tuvieran por Default --- > php artisan migrate --seed < ---
Terminando dichas instalaciones se genera el API key para la aplicación --- > php artisan key:generate < ---

Terminando asi la instalación para la ejecución del aplicativo.


