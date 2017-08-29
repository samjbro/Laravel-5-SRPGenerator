<?php
namespace samjbro\SRPGenerator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
class SRPGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSRPGenerator();
        $this->registerContractGenerator();
        $this->registerEntityGenerator();
        $this->registerModelGenerator();
        $this->registerProviderGenerator();
        $this->registerRepoGenerator();
        $this->registerServiceGenerator();
    }

    /**
     * Register the make:seed generator.
     */
    private function registerContractGenerator()
    {
        $this->app->singleton('command.samjbro.srpcontract', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\SRPContract'];
        });

        $this->commands('command.samjbro.srpcontract');
    }
    private function registerEntityGenerator()
    {
        $this->app->singleton('command.samjbro.srpentity', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\SRPEntity'];
        });

        $this->commands('command.samjbro.srpentity');
    }
    private function registerModelGenerator()
    {
        $this->app->singleton('command.samjbro.srpmodel', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\SRPModel'];
        });

        $this->commands('command.samjbro.srpmodel');
    }
    private function registerProviderGenerator()
    {
        $this->app->singleton('command.samjbro.srpprovider', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\SRPProvider'];
        });

        $this->commands('command.samjbro.srpprovider');
    }
    private function registerRepoGenerator()
    {
        $this->app->singleton('command.samjbro.srprepo', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\SRPRepo'];
        });

        $this->commands('command.samjbro.srprepo');
    }
    private function registerServiceGenerator()
    {
        $this->app->singleton('command.samjbro.srpservice', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\SRPService'];
        });

        $this->commands('command.samjbro.srpservice');
    }

    private function registerSRPGenerator()
    {
        $this->app->singleton('command.samjbro.srp', function ($app) {
            return $app['samjbro\SRPGenerator\Commands\ServiceRepoPattern'];
        });

        $this->commands('command.samjbro.srp');
    }

}
