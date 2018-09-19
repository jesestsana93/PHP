La base de datos se llama proyecto. Se uso xampp para phpmyadmin.

Las tablas se llaman estudiantes y secciones. Para las llaves primarias 
de las tablas est� palomeada la opci�n de A_I (autoincremento) para que sean valores
distintos autom�ticamente y puedan registrarse en la aplicaci�n. En 
caso contrario, no se podr�n visualizar los cambios de a�adir secciones y estudiantes.

No se creo una relaci�n puesto que marcaba error en la llave for�nea por el autoincremento
pero si no se pon�a esa opci�n no se iban a visualizar los cambios.

Se saco de un curso de php de c�digo facilito, y b�sicamente es un CRUD (create, read,update,delete)
de PHP que permite a�adir/crear, ver, actualizar/editar y eliminar/borrar estudiantes y secciones.

Lo de ver solo aplica en estudiantes. El nombre se pondr� de color azul. Es un link que lleva
autom�ticamente a una secci�n con informaci�n del estudiante como se muestra en las im�genes 1-6.

Para acceder hay que activar xampp, y empezar Mysql y Apache. Posteriormente en nuestro navegador poner:
localhost/proyecto o la ruta donde este; esta ruta tambi�n se pondr� en el archivo index.php, que esta fuera
de las carpetas, en define('URL', "http://localhost/ruta/") ver imagen 9