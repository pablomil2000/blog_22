# blog_22

Este proyecto es un ejemplo del desarrollo de un sitio web de blog siguiendo la estructura de MVC.

Este blog cuenta con login, dentro de este los usuarios se podrán identificar como usuario o como administrador.

Los usuarios serán redirigidos a la página de inicio y podrán seguir navegando por el sitio web con normalidad.

Los usuarios administradores serán redirigidos a la página al panel de administración. Este panel está basado en adminLTE 3.2.0.

Dentro de este panel tienen la opción de crear nuevos posts que se verán en la página inicial del blog.

Todos los posts tienen:

1. id - int - autoincrement

1. Título – Varchar(250) - Es el texto que se usara como título para mostrar en el post

1. Texto - text - El contenido del post, se puede editar utilizando el plugin de summernote para mejorar el formato de la publicación

1. fecha - timestamp - fecha y hora a la que se creó el post

1. autor - int - id del usuario que ha creado el post
