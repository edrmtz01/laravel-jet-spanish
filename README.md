# Laravel Jet Spanish

[![Latest Version on Packagist](https://img.shields.io/packagist/v/edrmtz01/laravel-jet-spanish.svg?style=flat-square)](https://packagist.org/packages/edrmtz01/laravel-jet-spanish)
[![Total Downloads](https://img.shields.io/packagist/dt/edrmtz01/laravel-jet-spanish.svg?style=flat-square)](https://packagist.org/packages/edrmtz01/laravel-jet-spanish)

Paquete actualizado de traducciones para Laravel y Jetstream. El paquete  incluye las traducciones de los siguientes elementos:

- **Validaciones**  - Traducciones para las validaciones de Laravel.
- **Mensajes** - Traducciones para los mensajes de Laravel.
- **Componentes Jetstream** - Traducciones para los componentes de Jetstream.
    - **Iniciar sesión**
    - **Registro**,
    - **Restablecer contraseña**
    - **Perfil**  
    - **Información del perfil**
    - **Actualizar contraseña**
    - **Autenticación de dos factores**
    - **Sesiones del navegador**-
    - **Eliminar cuenta**
    - **Gestionar equipo**
    - **Configuración del equipo**
    - **Crear nuevo equipo**
- **Correos** - Traducciones para los correos de Jetstream.


## Compatibilidad

|Versión Laravel |Compatibilidad|
|------|-------------|
|**10.X**|**✅**|
|**9.X**|**✅**|
|**8.X**|**✅**|

## Instalación

Puedes instalar el paquete a través del composer:

```bash
composer require edrmtz01/laravel-jet-spanish
```

Después de instalar el paquete debemos publicar los archivos de traducción utilizando el siguiente comando:

```bash
php artisan laravel-jet-spanish:install
```

O también podemos usar:

```bash
php artisan vendor:publish --tag=lang
```
|Versión Laravel |Ruta de publicación|
|------|-------------|
|**10.X**|lang/es/|
|**9.X**|lang/es/|
|**8.X**|resources/lang/es/|

## Configuración

Para finalizar la configuración del paquete debemos  modificar el archivo `config/app.php` de la siguiente manera:

```php
    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

   // 'locale' => 'en',  Configuración por defecto
    
    'locale' => 'es', // Cambiamos el idioma por defecto a español
```

En caso de no se aplique la configuración pruebe ejecutando el siguiente comando:

```bash
php artisan config:clear
```

## Registro de cambios

Por favor revisa [Registro de cambios](CHANGELOG.md) para más información de los cambios recientes.

## Contribución

En caso de que quieras apoyar en la integración de nuevas traducciones o mejoras, revisa la  [Guía Contribución](CONTRIBUTING.md) para más detalles.

## Créditos

-   [Erick D.](https://github.com/edrmtz01)
-   [Todos los colaboradores](../../contributors)


Este paquete está inspirado en el paquete [Laravel en Español](https://github.com/Laraveles/spanish) para ofrecer una alternativa actualizada de las traducciones en versiones recientes de Laravel.

Agradecimientos especiales a [Laravel Package Boilerplate](https://laravelpackageboilerplate.com) que ayuda a generar una estructura base de carpetas y archivos para la creación de paquetes de laravel.



## Seguridad

Si descubre algún problema relacionado con la seguridad, envíe un correo electrónico a e.drmtz01@gmail.com en lugar de utilizar el rastreador de problemas.



## Licencia
La Licencia MIT (MIT). Consulte  [Archivo de licencia](LICENSE.md) para obtener más información.



