![Lumen version](https://img.shields.io/badge/Lumen->=5.1-blue.svg)
![Packagist Version](https://img.shields.io/packagist/v/Niellles/lumen-commands)
![GitHub release (latest by date including pre-releases)](https://img.shields.io/github/v/release/niellles/lumen-commands?include_prereleases)
[![GitHub issues](https://img.shields.io/github/issues/Niellles/lumen-commands.svg)](https://github.com/Niellles/lumen-commands/issues) [![Packagist](https://img.shields.io/packagist/dt/niellles/lumen-commands.svg)](https://packagist.org/packages/niellles/lumen-commands) [![License](https://img.shields.io/badge/license-MIT-green.svg)](https://github.com/Niellles/lumen-commands/blob/master/LICENSE)

# lumen-commands
This package adds commands that you may know from Laravel, but aren't supported in Lumen by default.

## Installation
It's recommended to only use this package in your development environment. You will not need these commands in production and Laravel left them out for a reason.
Add `"niellles/lumen-commands": "dev-master"` to `"require-dev"` in your composer.json.
```javascript
"require-dev": {
    ...
    "niellles/lumen-commands": "^1.0.0"
  }
```

Add the following lines to your app.php:
```php
if (env('APP_ENV') === 'local') {
    $app->bind(Illuminate\Database\ConnectionResolverInterface::class, Illuminate\Database\ConnectionResolver::class);
    $app->register(Niellles\LumenCommands\LumenCommandsServiceProvider::class);
}
```

You can now run the commands, like you would under a Laravel installation, from your CLI of choice:  
`php artisan make:model test`

## Currently supported Commands
Not all of Laravel's commands are included in this package. At this point it's only some make:* commands that I really missed.
If you miss a particular command feel free to request it, or better yet: create it yourself (not much more than copy/paste) and do a pull-request.
 
* `make:console {name}`
* `make:controller {name}`
* `make:exception {name}`
* `make:job {name}`
* `make:middleware {name}`
* `make:model {name}`
* `make:seed {name}`
