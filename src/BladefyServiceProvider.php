<?php

namespace Migcube1\Bladefy;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;


class BladefyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->bootPublishing();
        $this->bootBladefyComponents();
    }

    /**
     * Registra componentes Blade personalizados definidos en la configuración del paquete.
     */
    private function bootBladefyComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('bladefy.prefix', '');

            /** @var BladeComponent $component */
            foreach (config('bladefy.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);
            }
        });
    }

    /**
     * Publica archivos del paquete para que puedan ser copiados y usados en la estructura del proyecto.
     */
    private function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/bladefy.php' => config_path('bladefy.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/views' => resource_path('views'),
            ], 'views');

            $this->publishes([
                __DIR__ . '/Components' => app_path('View/Components/'),
            ], 'components');
        }
    }
}
