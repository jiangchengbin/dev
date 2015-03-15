Laravel 5 Debug
=================
Laravel 5 wrapper for the [Debug](http://www.94song.com) API.

[![Build Status](https://img.shields.io/travis/vinkla/hashids/master.svg?style=flat)](http://www.94song.com/s94/debug)
[![Latest Stable Version](http://img.shields.io/packagist/v/vinkla/hashids.svg?style=flat)](http://www.94song.com/s94/debug)
[![License](https://img.shields.io/packagist/l/vinkla/hashids.svg?style=flat)](http://www.94song.com/)

## Installation
Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
composer require jiangchengbin/dev:~1.0
```

Add the service provider to ```config/app.php``` in the `providers` array.

```php
'Jiangchengbin\Dev\DevServiceProvider'
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in ```config/app.php``` to your aliases array.

```php
'Dev' => 'Jiangchengbin\Dev\Facades\Dev'
```

## Configuration

Laravel Debug requires connection configuration. To get started, you'll need to publish all vendor assets:

```bash
php artisan vendor:publish
```

This will create a `config/debug.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.


## Usage

#### DevManager

This is the class of most interest. It is bound to the ioc container as `hashids` and can be accessed using the `Facades\Hashids` facade. This class implements the ManagerInterface by extending AbstractManager. The interface and abstract class are both part of [@GrahamCampbell Laravel Manager](https://github.com/GrahamCampbell/Laravel-Manager) package, so you may want to go and checkout the docs for how to use the manager class over at that repository. Note that the connection class returned will always be an instance of `Hashids\Hashids`.

#### Facades\Dev

This facade will dynamically pass static method calls to the `Hashids` object in the ioc container which by default is the `HashidsManager` class.

#### DevServiceProvider

This class contains no public methods of interest. This class should be added to the providers array in `config/app.php`. This class will setup ioc bindings.

