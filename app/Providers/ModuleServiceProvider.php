<?php

namespace App\Providers;

use Nwidart\Modules\Module;
use Illuminate\Support\ServiceProvider;

use Illuminate\Database\Eloquent\Factory;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->app['modules']->allEnabled() as $module) {
            $this->loadViews($module);
            $this->loadTranslations($module);
            $this->loadConfigs($module);
            $this->loadMigrations($module);
            $this->loadModelFactories($module);
        }
    }

    /**
     * Load views for the given module.
     *
     * @param \Nwidart\Modules\Module $module
     * @return void
     */
    private function loadViews(Module $module)
    {
        $viewPath = resource_path('views/modules/' . $module->getLowerName());

        $sourcePath = module_path($module->getName(), 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $module->getLowerName() . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths($module), [$sourcePath]), $module->getLowerName());
    }

    /**
     * Load translations for the given module.
     *
     * @param \Nwidart\Modules\Module $module
     * @return void
     */
    private function loadTranslations(Module $module)
    {
        $langPath = resource_path('lang/modules/' . $module->getLowerName());

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $module->getLowerName());
        } else {
            $this->loadTranslationsFrom(module_path($module->getName(), 'Resources/lang'), $module->getLowerName());
        }

        $this->loadJsonTranslationsFrom( module_path($module->getName(), 'Resources/lang'), $module->getLowerName());
    }

    /**
     * Load migrations for the given module.
     *
     * @param \Nwidart\Modules\Module $module
     * @return void
     */
    private function loadConfigs(Module $module)
    {
       $this->publishes([
            module_path($module->getName(), 'Config/config.php') => config_path($module->getLowerName() . '.php'),
        ], $module->getLowerName());

        $this->mergeConfigFrom(
            module_path($module->getName(), 'Config/config.php'), $module->getLowerName()
        );
    }

    /**
     * Load migrations for the given module.
     *
     * @param \Nwidart\Modules\Module $module
     * @return void
     */
    private function loadMigrations(Module $module)
    {
        $this->loadMigrationsFrom("{$module->getPath()}/Database/Migrations");
    }

    /**
     * Load model factories for the given module.
     *
     * @param \Nwidart\Modules\Module $module
     * @return void
     */
    private function loadModelFactories(Module $module)
    {
        $path = "{$module->getPath()}/Database/Factories";
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(Module $module): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $module->getLowerName())) {
                $paths[] = $path . '/modules/' . $module->getLowerName();
            }
        }
        return $paths;
    }
}
