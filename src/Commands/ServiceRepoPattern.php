<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Filesystem\Filesystem;

class ServiceRepoPattern extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srp {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create SRP for given model';

    /**
     * Create a new command instance.
     *
     */

    protected $files;
    protected $model;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = $this->argument('model');
        $this->makeModel($model);
        $this->makeService($model);
        $this->makeRepoInterface($model);
        $this->makeProvider($model);
        $this->makeRepo($model);
        $this->makeEntity($model);
    }

    private function makeModel($model)
    {
        $this->call('make:srpmodel', [
            'name' => "App\\Models\\" . $model . "\\MySQL\\" . $model
        ]);
    }

    private function makeService($model)
    {
        $this->call('make:srpservice', [
            'name' => "App\\Services\\" . $model
        ]);
    }

    private function makeRepoInterface($model)
    {
        $this->call('make:srpcontract', [
            'name' => "App\\Repos\\" . $model . "\\" . $model . "Contract"
        ]);
    }

    private function makeProvider($model)
    {
        $this->call('make:srpprovider', [
            'name' => "App\\Providers\\" . $model
        ]);
    }

    private function makeRepo($model)
    {
        $this->call('make:srprepo', [
            'name' => "App\\Repos\\" . $model . "\\MySQL\\" . $model
        ]);
    }

    private function makeEntity($model)
    {
        $this->call('make:srpentity', [
            'name' => "App\\Entities\\" . $model
        ]);
    }


}
