<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Schema;
use App\Models\Permission;
use Illuminate\Contracts\Auth\Guard;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Check boot method is loaded or not.
     *
     * @var boolean
     */
    public $isBooted;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {
        Schema::defaultStringLength(191);
        error_reporting(E_ALL);
        if (!$this->app->runningInConsole() && env('APP_INSTALL') == true) {
            View::composer('*', function ($view) use ($auth) {
                if (!$this->isBooted) {
                    $json = \Cache::get('lanObject-' . config('app.locale'));
                    if (empty($json)) {
                        $json = file_get_contents(resource_path('lang/' . config('app.locale') . '.json'));
                        \Cache::put('lanObject-' . config('app.locale'), $json, 86400);
                    }
                    $data['json'] = $json;
                    $data['prms'] = Permission::getAuthUserPermission(optional($auth->user())->id);
                    $view->with($data);
                    $this->isBooted = true;
                }
            });
        }
    }
}
