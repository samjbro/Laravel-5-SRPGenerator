<?php

namespace samjbro\SRPGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class SRPRepo extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:srprepo {name}';

    protected $type = 'Repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ServiceRepoPattern Eloquent Repository class';

    public function getStub()
    {
        return __DIR__.'/stubs/repo.stub';
    }

}
