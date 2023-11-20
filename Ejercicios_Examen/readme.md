# Examen de IAW (php)

## 1. Levantamos el contenedor de docker
- Desde el repositorio que nos hemos descargado de GITHUB.

[Repositorio](https://github.com/jersonmartinez/docker-lamp) 

- Ya con el repositorio descagado, apagamos el servicio de apache.
  ```bash
    systemctl stop apache.service
  ```

- Y desde la carpeta del repositorio levantamos la pila LAMP.
  ```bash
    docker-compose up -d
  ```

- Finalmente tenemos levantado la pila LAMP

![alt image](/capturas/captura%20lamp)

- Ahora ya podemos trabajar con el php

[Formulario](/formulario.php)