# Crear y configurar server vps con mariadb

## Iniciar sesion como root

`ssh root@your_server_ip`

Con la ip y la contraseña proporcionada por nuestro proveedor.

## Crear nuevo usuario

`adduser pepe`

## Darle permisos sudo

`usermod -aG sudo pepe`

## Configurar firewall

En clouding.io desde el panel abrir 3306

## Entrar con el nuevo usuario

`ssh pepe@server_ip`

## Fuente

https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-20-04-es

## Instalar mariadb

`sudo apt update`

`sudo apt install mariadb-server`

## Asegurar la instalación de mariadb

`sudo mysql_secure_instalation`

- Enter
- N Enter
- Y Enter para el resto

## Crear usuario

`sudo mariadb`

`GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;`

- Podemos canviar *.* por un nombre de base de datos para restringir sólo a esa.
- 'admin' es el nombre del usuario.
- Podemos cambiar localhost por el server desde el que nos vamos a conectar o poner el comodín '%' para conectarnos desde cualquier ip.
- 'password' será la contraseña

### Reiniciamos registros

`FLUSH PRIVILEGES;`

`exit;`

## Prueba

`sudo systemctl status mariadb`

`mysqladmin -u pepe -p version`

## Fuente

https://www.digitalocean.com/community/tutorials/how-to-install-mariadb-on-ubuntu-20-04-es
