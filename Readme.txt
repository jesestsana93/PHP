La base de datos se llama proyecto. Se uso xampp para phpmyadmin.

Las tablas se llaman estudiantes y secciones. Para las llaves primarias 
de las tablas está palomeada la opción de A_I (autoincremento) para que sean valores
distintos automáticamente y puedan registrarse en la aplicación. En 
caso contrario, no se podrán visualizar los cambios de añadir secciones y estudiantes.

No se creo una relación puesto que marcaba error en la llave foránea por el autoincremento
pero si no se ponía esa opción no se iban a visualizar los cambios.

Se saco de un curso de php de código facilito, y básicamente es un CRUD (create, read,update,delete)
de PHP que permite añadir/crear, ver, actualizar/editar y eliminar/borrar estudiantes y secciones.

Lo de ver solo aplica en estudiantes. El nombre se pondrá de color azul. Es un link que lleva
automáticamente a una sección con información del estudiante como se muestra en las imágenes 1-6.

Para acceder hay que activar xampp, y empezar Mysql y Apache. Posteriormente en nuestro navegador poner:
localhost/proyecto o la ruta donde este; esta ruta también se pondrá en el archivo index.php, que esta fuera
de las carpetas, en define('URL', "http://localhost/ruta/") ver imagen 9