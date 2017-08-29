<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class SRPService extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srpservice {name}';
    protected $type = 'Service';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ServiceRepoPattern Service class';

    public function getStub()
    {
        return __DIR__.'/stubs/service.stub';
    }

}
