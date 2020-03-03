# Autenticación externa en Moodle por servicio web REST externo

Plugin de Moodle para autenticar usuarios mediante un servicio web Rest externo.

Español

Este complemento le permite configurar un servicio web REST
para autenticar a los usuarios.

Se modificó auth_ws de Daniel Neis https://github.com/danielneis/moodle-auth_ws/archive/master.zip 
para que funcione en un servicio Rest.

La idea fue utilizarlo para SIU Guaraní

Instalación
-----------

* Copiar los archivos en moodle/auth/wsr/
* Loguearse en Moodle como Administrador e ir a la página de "Notificaciones"
* Seguir las intrucciones para instalar el complemento.

Uso
-----

Configurar la URL del servicio web, el nombre de la función que se llamará, la clase y el atributo devueltos para obtener el resultado booleano.

Configuarar método de autenticación usuario y clave.

Este complemento no crea usuarios y tampoco actualiza los registros de los usuarios.

Se supone que los usuarios deben ser creados y actualizados por un servicio externo o cualquier otro método.

Los usuarios deben tener como modo de identificación este complemento para que él autentique a los usuarios.

La captura de pantalla que acompaña el paquete del complemento muestra un ejemplo de cómo configurar su complemento para llamar a su servicio web.

![Config Example](https://github.com/gaticaz/wsr/blob/master/ejemplo_config_auth_wsr.png)


Reportes de errores o colaboraciones a martin.gatica@uner.edu.ar
