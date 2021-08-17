## Desplegar sitio php

### Instalar php

`sudo apt install php-fpm`

Comprobar el estado del servicio: `systemctl status php7.2-fpm`

Instalar extensiones: `sudo apt install php7.2-mysql php7.2-bcmath php7.2-xml`

Ver extensiones: `php -m`

Extensiones instaladas: `dpkg --get-selections | grep -i php`

TODO: Configurar timezone

### Configurar nginx

Creo archivo index.php en ~/sites/home

Edito `sudo nano /etc/nginx/sites-avalaible/default`:

```
server {
  listen 80 default_server;
  listen [::]:80 default_server;

  root /home/josep/sites/home;

  index index.php index.html index.htm;

  server_name _;

  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }

  location ~ \.php$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
  }
}

```

Reinicio nginx: `sudo systemctl restart nginx``

### Instalar mariadb

`sudo apt -y install mariadb-server`

Comprobar que está en marcha: `systemctl status mariadb`

Per defecto se configura con user *root* sin pass.

Para configuración segura: `sudo mysql_secure_installation`

Asignar pass al user root y responder a todo que si.

Acceder a mysql: `sudo mysql -u root -p`

Crear DB: ``

TODO: Acceder a la DB desde fuera

https://www.digitalocean.com/community/questions/remote-connection-to-mariadb-on-ubuntu
https://mariadb.com/kb/en/configuring-mariadb-for-remote-client-access/
https://www.digitalocean.com/community/questions/how-do-i-use-ssh-to-access-mysql-remotely
https://www.zeppelinux.es/corregir-error-1698-28000-access-denied-for-user-rootlocalhost-en-mariadb-mysql/


### Instalar composer

Instalar dependencias necesarias: `sudo apt install curl php-cli php-mbstring unzip`

Para instalar composer:

`cd ~`

`curl -sS https://getcomposer.org/installer -o composer-setup.php`

`sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer`

Esto instala composer en */usr/local/bin/composer*


### Snapshot

Imagen guardada como PhpServer.

Falta crear DB y ejecutar migrations.

### Fuentes

https://linuxize.com/post/how-to-install-php-on-ubuntu-18-04/#installing-php-72-with-nginx

https://websiteforstudents.com/how-to-list-installed-php-php-fpm-extensions-on-ubuntu-16-04-18-04/

https://linuxize.com/post/how-to-install-mariadb-on-ubuntu-18-04/


https://www.digitalocean.com/community/tutorials/como-instalar-y-utilizar-composer-en-ubuntu-18-04-es





