<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot() {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            $baseUrl = parse_url(config('app.url'), PHP_URL_HOST); 
            Route::group(["middleware" => "web"], function() use ($baseUrl) {
                Route::group([
                    "namespace" => "App\\Http\\Controllers",
                    "domain" => "$baseUrl",
                    "as" => "main::"
                ], base_path('routes/web.php'));

                Route::group([
                    "namespace" => "App\\Http\\Controllers\\Stern",
                    //"domain" => "my.$baseUrl",
                    "prefix" => "my",
                    "as" => "my::"
                ], base_path('routes/my/web.php'));

                Route::group([
                    "namespace" => "App\\Http\\Controllers\\Stern",
                    //"domain" => "stern.$baseUrl",
                    "prefix" => "stern",
                    "as" => "stern::"
                ], base_path('routes/stern/web.php'));
            });
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting() {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
