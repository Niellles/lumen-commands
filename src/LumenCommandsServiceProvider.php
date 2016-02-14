<?php

namespace Niellles\LumenCommands;

use Illuminate\Support\ServiceProvider;
use Niellles\LumenCommands\Commands\ConsoleMakeCommand;
use Niellles\LumenCommands\Commands\ControllerMakeCommand;
use Niellles\LumenCommands\Commands\ExceptionMakeCommand;
use Niellles\LumenCommands\Commands\JobMakeCommand;
use Niellles\LumenCommands\Commands\MiddlewareMakeCommand;
use Niellles\LumenCommands\Commands\ModelMakeCommand;
use Niellles\LumenCommands\Commands\SeedMakeCommand;


class LumenCommandsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands(ConsoleMakeCommand::class);
        $this->commands(ControllerMakeCommand::class);
        $this->commands(ExceptionMakeCommand::class);
        $this->commands(JobMakeCommand::class);
        $this->commands(MiddlewareMakeCommand::class);
        $this->commands(ModelMakeCommand::class);
        $this->commands(SeedMakeCommand::class);
    }
}
