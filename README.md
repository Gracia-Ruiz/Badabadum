# Badabadum.

## Proyecto de tienda de cómics nuevos o de segunda mano on-line. Constuido con Laravel 7.
Incluye relaciones, conexión a mysql, autentificación con ui, gestión de aceptación de anuncios, crop de imágenes, llamada ajax para subida de imágenes y función de multi-lenguaje.

## Las conexiones a mysql se han realizado a través de Eloquent, y todo lo realizado se puede encontrar en la página oficial de [Laravel](https://laravel.com/docs/7.x/).
  
## Consideraciones:
- Necesitamos una versión compatible de [PHP](https://laravel.com/docs/7.x/#server-requirements).
- Si estamos usando windows, tendremos que habilitar una serie de extensiones en nuestro archivo **php.ini**. No importa si no sabes cuáles son, laravel te arrojará un     error con el nombre exacto de la extensión.
- Tener instalado **Composer**.
- Tener instalado **Node.js**.
- Para lanzar el proyecto en un servidor local sin necesidad de tener nada más instalado, podemos aprovechar el pequeño **Web Server** que trae php para desarrollo.
  Simplemente lo abrimos con el comando **php artisan serve**. 


## Al ser un proyecto Laravel, al clonar, hay que generar varias carpetas y archivos que se encuentran en el .gitignore.
1. Después de clonar, hay que lanzar el comando **composer install**, dentro del proyecto.
2. También hay que generar el archivo **.env** (que tiene información sensible del proyecto), para ello, debemos copiar el archivo **.env.example**.
   Podemos realizarlo con el comando **cp .env.example .env**.
3. Debemos generar la key del proyecto (esta aparece en la parte superior del archivo .env), con el comando **php artisan key:generate**.
4. Después, debemos crear nuestro **DB**, y en el **.env**, poner el nombre del mismo, contraseña y si queremos cambiar algo más.
5. Después de ese paso, debemos lanzar el comando **php artisan migrate**, para ejecutar nuestras migraciones.
6. Por último, debemos tener en cuenta que en este caso, necesitamos la carpeta **node modules**, que no se ha conectado a github por su tamaño.
   Para ello, simplemente lanzamos el comando **npm install**, dentro del proyecto.
