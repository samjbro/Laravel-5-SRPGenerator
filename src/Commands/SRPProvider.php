<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class SRPProvider extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srpprovider {name}';

    protected $type = 'Service Provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ServiceRepoPattern Service Provider class';

    public function getStub()
    {
        return __DIR__.'/stubs/provider.stub';
    }

}
