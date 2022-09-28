<?php

namespace fflnvb\admin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Blade;

class AdminServiceProvider extends ServiceProvider
{
    /** @var string */
    private const CONFIG_FILE = __DIR__.'/../config/admin.php';

    /** @var string */
    private const ROUTES_FILE = __DIR__.'/../routes/admin.php';

    /** @var string */
    private const VIEWS_PATH = __DIR__.'/../resources/views';

    /** @var string */
    private const PUBLIC_PATH = __DIR__.'/../public';

    /** @var string */
    private const LANG_PATH = __DIR__.'/../lang';

    /**
     * Bootstrap the application Services
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->loadViewsFrom(self::VIEWS_PATH, 'admin');

        $this->registerComponents();
        if(file_exists(base_path() . '/routes/admin.php')) {
            Route::middleware(['web'])->group(function () {
                Route::prefix('admin')
                    ->name('admin.')
                    ->namespace('App\Http\Controllers')
                    ->group(base_path('routes/admin.php'));
            });
        }
        $this->loadTranslationsFrom(self::LANG_PATH, 'admin');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(self::CONFIG_FILE, 'library');
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
        Blade::componentNamespace('fflnvb\\admin\\View\\Components', 'admin');

        return $this;
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    public function registerPublishing()
    {
        $this->publishes([
            self::CONFIG_FILE => config_path('admin.php'),
            self::ROUTES_FILE => base_path() . '/routes/admin.php',
            self::PUBLIC_PATH => public_path(),
        ], 'fflnvb-admin');
    }
}
