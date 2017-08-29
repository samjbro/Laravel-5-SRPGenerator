<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class SRPEntity extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srpentity {name}';
    protected $type = 'Entity';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ServiceRepoPattern Entity class';

    public function getStub()
    {
        return __DIR__.'/stubs/entity.stub';
    }

}
