## Configuración inicial

### 1. Crear VPS con imagen de Ubuntu 18.04

### 2. Configurar acceso ssh

  * Ingresar al server como root: `ssh root@ip_server`

  * Poner la pass q nos da el proveedor.

  * Añadir user: `adduser josep`

  * Para poder ejecutar comandos con sudo: `usermod -aG sudo josep`

  * Para cambiar de user: `su - josep`

  * Ahora debemos poder acceder al server `ssh josep@server_ip` con password.

  * Para activar el acceso mediante ssh debemos copiar la clave pública de nuestro terminal al archivo `~/.ssh/authorized_keys`, para ello, desde nuestro terminal: `ssh-copy-id josep@server_ip`

  * Ahora debemos poder acceder al server por ssh sin password: `ssh josep@server_ip`

  * Desactivar el acceso al server mediante password, en el server, editamos el archivo de configuración ssh: `sudo nano /etc/ssh/sshd_config`, y ponemos `PasswordAuthentication no`. Guardamos y salimos.

  * Reiniciamos el servicio ssh: `sudo systemctl restart ssh`

### 3. Actualizar e instalaciones básicas

  * Actualizamos el server: `sudo apt update && sudo apt upgrade`

  * Instalación de herramientas básicas:

    * `sudo apt install git`
    * `sudo apt install nginx`

### 4. Snapshot

Guardamos el server así configurado en la snapshoot `basicServer`

### Fuentes

https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-18-04

https://www.digitalocean.com/community/tutorials/how-to-set-up-ssh-keys-on-ubuntu-1804

### Comandos

Ver puertos activos: `netstat -tln`







