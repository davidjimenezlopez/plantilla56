
## MUlti Auth LAravel 5.6

Esta implementación permite realizar el inicio de sesion para clientes y administradores de forma paralela con todas sus funcionalidades

- Dos sesiones simultaneas un usuario se puede loguear y mantener la sesion al igual que un administrador.
- El sistema de recordar contraseña para administradores y usuarios.
- El registro publico es solo para usuarios, para crear administradores se debe iniciar sesion como administrador y a traves del menu crear otros admins.
- La implementacion cuenta con [Laravel passport] (https://laravel.com/docs/5.6/passport) para el uso de autenticación por API.
- Esta integrado[Maatwebsite](https://laravel-excel.maatwebsite.nl/docs/3.0/getting-started/basics) para la gestión de archivos Excel.



## Accesos

Para el acceso al dashboard del administrador a tarves d ela ruta public/admin/login con las credenciales
-usuario: administrador@test.com
-contraseña: administrador


##Implementación

-La base de datos se encuentra en plantila.sql
- Recuerde que una vez clonado este repositorio ejecutar en la raiz del proyecto composer install
