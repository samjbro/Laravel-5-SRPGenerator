<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class SRPContract extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srpcontract {name}';

    protected $type = 'Contract';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ServiceRepoPattern Contract class';

    public function getStub()
    {
        return __DIR__.'/stubs/contract.stub';
    }

}
