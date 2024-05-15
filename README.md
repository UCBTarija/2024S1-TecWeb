# ALMACEN

## 1. Creación de tablas y datos de prueba en postgres

	CREATE TABLE producto (
		id serial not null primary key, --esto crea la secuencia 'producto_id_seq'
		codigo varchar(20) not null,
		nombre varchar(100) not null,
		precio real not null
	);
	
	insert into producto(codigo, nombre, precio) values
	('PROD01','LECHE PIL TARIJA 1LT', 5.5),
	('PROD02','ARROZ 10 MINUTOS 1KG', 6),
	('PROD03','CERVEZA PACEÑA LATA 700ML', 10),
	('PROD04','COCA COLA 2 LTS', 10);

## 2. Inicialización:

  a) cargar las librerías en vendor, para eso ejecutar desde la raíz de la aplicación:
    - Si se tiene el composer instalado: compser update
    - Si se tieen el archivo composer.phar: php composer.phar update
  b) configurar la base de datos:
    - configurar el archivo .env con los datos de acceso a la Bd. Ejemplo:
    
	DB_CONNECTION=pgsql
	DB_HOST=127.0.0.1
	DB_PORT=5432
	DB_DATABASE=ucb_almacen
	DB_USERNAME=ucb
	DB_PASSWORD=xxxx

## 3. Ejecución

Ejecutar el servidor escribiendo en la raíz de la aplicación:

	php artisan serve
