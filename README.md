# Wordpress Theme Minifi (No Plugin)
Tema en blanco de Wordpress con funciones para compilar (css / js / html) sin plugins.

## Incluye

**Html5Blank**
> Tema basico wordpress.

**MinifyPHP**
> Compila archivos CSS/JS rápido y sin necesidad de programa adicional


**HtmlMinify**
> Elimina de forma segura todos los comentarios estándar y los espacios en blanco innecesarios de un documento HTML

## Descripción del Tema:

* Libreria MinifyPHP se encuentra incluida en function.php 
* Libreria HtmlMinify se encuentra incluida en function.php
* Se añadio funcion glob para captar archivos (.css / .js) y no tener que agregar los archivos uno por uno.
* Solo se deben editar los archivos en los directorios (../css/ y ../js/).
* Una vez en produccion el tema compilara los archivos (css/js) dentro del directorio (../minified/), en donde se encuentran los directorios css / js respectivamente con los archvos (css/min.css) & (js/min.js).


## Recursos y agradecimientos.
* Html5Blank: [github.com/toddmotto/html5blank](https://github.com/toddmotto/html5blank)
* Minify CSS/JS: [https://github.com/matthiasmullie/minify](https://github.com/matthiasmullie/minify)
* HtmlMinify: [https://github.com/stevenvachon/html-minify](https://github.com/stevenvachon/html-minify)
