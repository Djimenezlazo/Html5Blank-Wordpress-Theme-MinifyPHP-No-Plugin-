# Html5Blank Wordpress Theme MinifyPHP (No Plugin)
Tema en blanco de Wordpress con MinifyPHP library (No Plugin)

* Html5Blank: [github.com/toddmotto/html5blank](https://github.com/toddmotto/html5blank)
* MinifyPHP: [https://github.com/matthiasmullie/minify](https://github.com/matthiasmullie/minify)

## Descripción del Tema:
Esta plantilla de wordpress tiene instalado MinifyPHP, compila archivos CSS/JS rápido y sin necesidad de programa adicional.

* La libreria MinifyPHP se encuentra incluida en function.php
* Se añadio funcion glob para captar archivos (.css / .js) y no tener que agregar los archivos uno por uno.
* Solo se deben editar los archivos en los directorios (../css/ y ../js/).
* Una vez en produccion el tema compilara los archivos (css/js) dentro del directorio (../minified/), en donde se encuentran los directorios css / js respectivamente con los archvos (css/min.css) & (js/min.js).