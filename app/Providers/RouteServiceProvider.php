<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';
    protected $vendorNamespace = 'App\\Http\\Controllers\\Vendor';
    protected $siteNamespace = 'App\\Http\\Controllers\\Site';
    protected $apiNamespace = 'App\\Http\\Controllers\\Api';
    protected $userApiNamespace = 'App\\Http\\Controllers\\Api\\User';
    protected $vendorApiNamespace = 'App\\Http\\Controllers\\Api\\Vendor';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->apiNamespace)
                ->group(base_path('routes/api.php'));

            Route::prefix('api/vendor')
                ->middleware('api')
                ->namespace($this->vendorApiNamespace)
                ->group(base_path('routes/vendorApi.php'));

            Route::prefix('api/user')
                ->middleware('api')
                ->namespace($this->userApiNamespace)
                ->group(base_path('routes/userApi.php'));

            Route::prefix('admin')
                 ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::prefix('vendor')
                ->middleware('web')
                ->namespace($this->vendorNamespace)
                ->group(base_path('routes/vendor.php'));
            Route::middleware('web')
                ->namespace($this->siteNamespace)
                ->group(base_path('routes/site.php'));
                
            foreach ($this->app['modules']->allEnabled() as $module) {

                if (file_exists(module_path($module->getName(), '/Routes/web.php'))) {
                    Route::middleware('web')
                        ->group(module_path($module->getName(), '/Routes/web.php'));
                }

                if (file_exists(module_path($module->getName(), '/Routes/api.php'))) {
                    Route::prefix('api')
                        ->middleware('api')
                        ->group(module_path($module->getName(), '/Routes/api.php'));
                }
            }
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
