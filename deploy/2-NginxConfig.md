## Configuración de nginx

Para verificar el estado: `systemctl status nginx`

Para verificar los puertos abiertos: `sudo ufw status`. (En clouding.io el firewall se controla desde el webadmin)

Con la instalación limpia de nginx ya podemos acceder via web a la pagina por defecto.

### Gestión del procesoo

  * Detener el servidor: `sudo systemctl stop nginx`
  * Arrancar: `sudo systemctl start nginx`
  * Reiniciar: `sudo systemctl restart nginx`
  * Recargar configuración sin perder conexiones: `sudo systemctl reload nginx`
  * Habilitar el arranque al inicio del sistema: `sudo systemctl enable nginx` (Activado por defecto)
  * Deshabilitarlo: `sudo systemctl disable nginx`

Para ver los bloques configurados: `grep -R "root" /etc/nginx/sites-enabled`

Creo el directorio `~/sites/home` que albergará la pagina por defecto: `mkdir ~/sites/home`

Cambio la configuración del sitio por defecto `sudo nano /etc/nginx/sites-avalaible/default`:

```
server {
        listen 80 default_server;
        listen [::]:80 default_server;

        root /home/josep/sites/home/public;

        # Add index.php to the list if you are using PHP
        index index.html index.htm index.nginx-debian.html;

        server_name _;

        # Paginas de error
        error_page 404 403 /40x.html;
        error_page 500 502 503 504 /50x.html;

        location / {
          try_files $uri $uri/ =404;
        }
}
```

Comprobar la sintaxis del archivo de configuración: `sudo nginx -t`

Reinicio el servicio: `sudo systemctl restart nginx`

Si colocacmos un archivo index.html en sites/home/public, ya lo puedo visitar. Las paginas de error 40x.html y 50x.html también en el directorio public.

## Fuentes

https://www.digitalocean.com/community/tutorials/como-instalar-nginx-en-ubuntu-18-04-es

https://www.digitalocean.com/community/tutorials/how-to-move-an-nginx-web-root-to-a-new-location-on-ubuntu-18-04

https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/

http://nginx.org/en/

https://www.digitalocean.com/community/tutorials/how-to-configure-nginx-to-use-custom-error-pages-on-ubuntu-14-04



