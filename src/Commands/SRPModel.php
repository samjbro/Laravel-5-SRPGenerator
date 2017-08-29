<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class SRPModel extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srpmodel {name}';
    protected $type = 'Model';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ServiceRepoPattern Eloquent model class';

    public function getStub()
    {
        return __DIR__.'/stubs/model.stub';
    }

}
