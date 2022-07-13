# bluecompany-oficial

# Se realiza aplicacion Laravel 8
 * Se editan configuraciones de entorno en el archivo ".env" donde:
    * DB_DATABASE={NOMBRE_BASE_DATOS}
    * DB_USERNAME={USUARIO_BD}
    * DB_PASSWORD={CONTRASENA_BD}
 * Se realizan migraciones de los modelos a la BD establecida anteriormente con los siguientes comandos
    * "php artisan migrate"
 * Se ingresan datos de prueba con los seed establecidos a cada modelos con los siguientes comandos
    * "php artisan db:seed --class=ProductoSeeder"
    * "php artisan db:seed --class=CategoriaSeeder"
 * Para levantar Tailwind y otras librerias pertenecientes a paquetes NPM, vamos a correr los siguientes comandos: 
    * "npm intall"
    * "npm run dev"
 * Levantamos Laravel con el comando
    * "php artisan serve"
 * Se puede consumir api con ruta "/api/productos" al momento de estar corriendo Laravel
  
