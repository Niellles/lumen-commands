# lumen-commands
This package adds commands that you may know from Laravel, but aren't supported in Lumen 5 ("The stunningly fast micro-framework by Laravel") by default.

## Installation
It's recommended to only use this package in your development environment. You will not need these commands in production and Laravel left them out for a reason.
Add `"niellles/lumen-commands": "dev-master"` to `"require-dev"` in your composer.json.
```javascript
"require-dev": {
    ...
    "niellles/lumen-commands": "dev-master"
  }
```

Add the following line to your app.php:
```php
if (env('APP_ENV') === 'local') {
    $app->bind(Illuminate\Database\ConnectionResolverInterface::class, Illuminate\Database\ConnectionResolver::class);
    $app->register(Niellles\LumenCommands\LumenCommandsServiceProvider::class);
}
```

## Currently supported Commands
Not all of Laravel's commands are included in this package. At this point it's only some make:* commands that I really missed.
If you miss a particular command feel free to request it, or better yet: create it yourself (not much more than copy/paste) and do a pull-request.

* make:console
* make:controller
* make:exception
* make:job
* make:middleware
* make:model
* make:seed
