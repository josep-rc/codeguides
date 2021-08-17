## Configurar server para app laravelcon Clouding.io

[https://www.digitalocean.com/community/tutorials/automatically-deploy-laravel-applications-deployer-ubuntu]

Crear VPS con imagen LEMP.

Acceder mediante `ssh root@ip_adress`

La contraseña llega x mail

Añadir user: `adduser josep`

Para poder ejecutar comandos con sudo: `usermod -aG sudo josep`

Para cambiar de user: `su - josep`

Crear directorio .ssh: `mkdir ~/.ssh`

Establecer permisos: `chmod 700 ~/.ssh`

Crear archivo de claves autorizadas: `nano ~/.ssh/authorized_keys`

Y pegar en él la clave pública de nuestro ordenador.

Restringimos los permisos: `chmod 600 ~/.ssh/authorized_keys`

Volvemos al usuario root: `exit`

Ya debemos poder entrar a nuestro server con: `ssh josep@ip_adress`

Actualizo el server: `sudo apt update && sudo apt upgrade`

Deshabilitar el acceso mediante contraseña:

`sudo nano /etc/ssh/sshd_config`

Modificar / descomentar:

`PasswordAuthentication no`

Recargar el servicio ssh: `sudo systemctl reload sshd`

No usar ufw Clouding tiene su firewall que se gestiona en el dash

Añadimos ssh al firewall y lo activamos:
```bash
sudo ufw app list
sudo ufw allow OpenSSH
sudo ufw allow 'Nginx HTTP'
sudo ufw enable
sudo ufw status numbered
```

La configuración de nginx està en: `/etc/nginx/`.

Instalo: `sudo apt install curl php-cli php-mbstring git unzip`

Instalo Composer de forma global en /usr/local/bin (mirar el hash en la web de composer):
```bash
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
php -r "unlink('composer-setup.php');"
```
En la máquina local:

Instalar deployer: `composer global require deployer/deployer`
Configurar conexión ssh con gitlab (comprobar con `ssh -T git@mygitlab.com`)

En server:

Configurar el usuario deployer:
```bash
sudo adduser deployer
sudo usermod -aG www-data deployer
sudo chfn -o umask=022 deployer
sudo chown deployer:www-data /var/www
sudo chmod g+s /var/www
```

Generar clave ssh para el usuario deployer: 
```bash
su - deployer
ssh-keygen -t rsa -b 4096
cat ~/.ssh/id_rsa.pub
```
Copiar la clave y añadirla al gitlab

En el server como deployer pegamos clave de locales:

`nano ~/.ssh/authorized_keys`

Asiganoms permisos: `chmod 600 ~/.ssh/authorized_keys`

Comprobamos que conecta con gitlab: `ssh -T git@mygitserver.com`

Para entrar directo al server como deployer: `ssh deployer@your_server_ip  -i ~/.ssh/deployerkey`

## Configurar nginx

Cremos la configuración para nuestro sitio en sites-available: `sudo nano /etc/nginx/sites-available/corp`

```
server {
        listen 80 default_server;
        listen [::]:80 default_server;

        root /var/www/site/current/public;
        index index.php index.html index.htm index.nginx-debian.html;

        server_name _;

        location / {
                try_files $uri $uri/ /index.php?$query_string;
        }


        location ~ \.php$ {
                include snippets/fastcgi-php.conf;

                fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
                fastcgi_param DOCUMENT_ROOT $realpath_root;

                fastcgi_pass unix:/run/php/php7.2-fpm.sock;

        }

        location ~ /\.ht {
                deny all;
        }

}
```
Creamos enlace simbólico a sites-enables:
`sudo ln -s /etc/nginx/sites-available/example.com /etc/nginx/sites-enabled/`

Dejo en sites-enabled sólo example.com (quito el default)

Compruebo la conf de nginx: `sudo nginx -t`

Reinicio nginx: `sudo systemctl restart nginx`

## Configurar mysql

No tengo la pass del user root: [https://clouding.io/kb/cambiar-el-password-de-root-de-mysql/]

Entramos a mariadb: `sudo mysql -u root -p`

Crear la db: `CREATE DATABASE dbname DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;`

Creo un user para la db: `CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';`
Le damos permisos: `GRANT ALL ON dbname.* TO 'user'@'localhost';`

Recargamos privilegios: `FLUSH PRIVILEGES;`

Salimos: `exit`

## Desplegar

En local, desde nuestro proyecto, creamos el archivo deploy.php: `dep init -t Laravel`

```php
<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'corp');

// Project repository
set('repository', 'git@gitlab.com:initias/corp.git');

// Hosts
host('85.208.22.91')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/site');    
    
// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
// before('deploy:symlink', 'artisan:migrate');
```

Hacemos deploy: `dep deploy`

En el server crear archivo .env: `nano /var/www/site/shared/.env`

```bash
APP_NAME=Laravel
APP_ENV=production
APP_KEY=base64:cA1hATAgR4BjdHJqI8aOj8jEjaaOM8gMNHXIP8d5IQg=
APP_DEBUG=false
APP_LOG_LEVEL=error
APP_URL=http://example.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_database
DB_USERNAME=laravel_user
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Descomentamos las migraciones en deploy.php

Desplegamos de nuevo: `dep deploy` (Ojo con la DB, hacer backup)

Creamos el user admin en el server con tinker:
```bash
php artisan tinker
\App\User::create(['name'=>'josep','email'=>'jopema7@gmail.com','password'=>bcrypt('password')]);
```

LISTO!

### TODO: Añadir local o remote: L S
### Seria una buena tactica tener la misma clave ssh para conectarse como josep en todos los ordenadores? y la clave para deployer tambien la misma en todos los ordenadores? [https://victorhckinthefreeworld.com/2016/01/28/transferir-llaves-ssh-de-un-pc-a-otro-en-gnulinux/]