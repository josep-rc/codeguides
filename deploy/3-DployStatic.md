## Desplegar proyecto estático

### Clonar el proyecto en el server

Iniciar sesion en el server: `ssh josep@server_ip`

Creamos clave ssh: `ssh-keygen -t rsa -b 4096`

Copiar la clave pública: `cat ~/.ssh/id_rsa.pub`

Agregarla a gitlab en user settings -> ssh keys

Snapshot creado: *StaticServer*

Situarse en `cd /home/josep/sites/home`

Clonar el repo: `git clone git@gitlab.com:jopema7/deptest.git .`

### Despliegue automático

A partir de aquí cada push que hagamos a master actualizará la web en el servidor.

Ver el proyecto en: https://gitlab.com/jopema7/deptest







## Fuentes

https://medium.com/@hfally/a-gitlab-ci-config-to-deploy-to-your-server-via-ssh-43bf3cf93775