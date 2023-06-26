<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelperCommand extends Command
{
    protected $signature = 'make:helper {name}';

    protected $description = 'Create a helper class';

    public function handle()
    {
        $name = $this->argument('name');

        $helperFilePath = app_path("Helpers/{$name}.php");

        if (file_exists($helperFilePath)) {
            $this->error("The helper class '{$name}' already exists.");
            return;
        }

        $stub = file_get_contents(__DIR__ . '/stubs/helper.stub');
        $stub = str_replace('{{ClassName}}', $name, $stub);

        file_put_contents($helperFilePath, $stub);

        $this->info("Helper class '{$name}' created successfully.");
    }
}
