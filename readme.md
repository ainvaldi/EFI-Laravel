# Sistema de Ventas
 
## Descripcion del Proyecto

Este proyecto web realizado en laravel es un software de gestion. Permite controlar los clientes, articulos, proveedores, ingresos, ventas, categorias, usuarios autorizados para usar dicho sistema. Lo bueno de este software es que se puede adaptar a varios negocios, ya sea una tienda, un kiosko, una ferreteria, entre otras. Es un sistema muy facil de usar y de entender. A continuacion explicare como pueden utilizar este sistema en sus negocios y/o empresas.


## Estructura de la Base de Datos
 <img src="https://i.imgur.com/RXiDRUM.png" alt="DataBase" width="400" height="300"> 

## Clonar el repositorio

Para clonar el repositorio nos dirigimos con nuestra consola a la ubicacion donde queremos que se encuentre el proyecto.
Seguido de esto ingresaremos:
 
 - git clone https://github.com/ainvaldi/EFI-Laravel.git.
 
 Luego de clonarlo, entraremos a la carpeta EFI-Laravel. Dentro de ella utilizaremos:
  
  - composer install
  
 ## Correr el proyecto
 
 Para correr el proyecto debemos tener una base de datos vacia con el nombre que desee.
 
 Luego entraremos a la carpeta del proyecto y editaremos el .env.example, borrandole el .example y por consiguiente solo queda el .env
 
 Dentro de dicho archivo editaremos los campos:
 - DB_DATABASE: nombre de nuestra base de datos
 - DB-USERNAME: nombre de nuestro usuario de mysql
 - DB-PASSWORD: contraseña de nuestro usuario de mysql
 
 Seguido de esto, nos dirigimos a la consola y dentro de nuestra carpeta del proyecto, en este caso EFI-Laravel, ejecutamos lo siguiente:
 
 - php artisan key:generate
 
 Luego para obtener la base de datos y las tablas ingresamos:
 
 - php artisan migrate
 
 - php artisan migrate --seed
 
 Luego de realizar todos los pasos, ya tendremos el proyecto en nuestro ordenador, solo queda ejecutarlo, para eso ingresaremos:
 
 - php artisan serve
 
 ## Como utilizar API
 
 ### Endpoints
 
 #### Categorias
 
 - GET de categorias
   - http://localhost:8000/api/almacen/categoria
 - GET de una categoria
   - http://localhost:8000/api/almacen/categoria/{id}
 - POST de una categoria
   - http://localhost:8000/api/almacen/categoria
 - PUT de una categoria
   - http://localhost:8000/api/almacen/categoria/{id}
 - DELETE de una categoria
   - http://localhost:8000/api/almacen/categoria/{id}
   
 #### Articulos
 
 - GET de articulos
   - http://localhost:8000/api/almacen/articulo
 - GET de una categoria
   - http://localhost:8000/api/almacen/articulo/{id}
 - POST de una categoria
   - http://localhost:8000/api/almacen/articulo
 - PUT de una categoria
   - http://localhost:8000/api/almacen/articulo/{id}
 - DELETE de una categoria
   - http://localhost:8000/api/almacen/articulo/{id}
 
 #### Clientes y Proveedores
 
 - GET de clientes
   - http://localhost:8000/api/ventas/cliente
 - GET de un cliente
   - http://localhost:8000/api/ventas/cliente/{id}
 - GET de proveedores
   - http://localhost:8000/api/compras/proveedor
 - GET de un proveedor
   - http://localhost:8000/api/compras/proveedor/{id}
