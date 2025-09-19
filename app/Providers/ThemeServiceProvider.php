<?php

declare(strict_types=1);

namespace Themes\Sixteen\Providers;

<<<<<<< HEAD
use Modules\Xot\Providers\XotBaseThemeServiceProvider;
<<<<<<< HEAD

/**
 * Service Provider per il tema Sixteen.
 * 
 * Questo provider gestisce la registrazione e configurazione
 * del tema Sixteen nell'applicazione Laravel.
=======
=======
use Themes\Sixteen\Services\SpidAuthService;
use Themes\Sixteen\Services\CieAuthService;
use Modules\Xot\Providers\XotBaseThemeServiceProvider;
>>>>>>> 7401ccb (.)
use Themes\Sixteen\Services\MenuBuilder;
use Themes\Sixteen\Services\ThemeService;
use Themes\Sixteen\View\Composers\SixteenComposer;
use Themes\Sixteen\Console\Commands\SixteenInstallCommand;
use Themes\Sixteen\Console\Commands\SixteenPublishCommand;
use Themes\Sixteen\Contracts\MenuFilterInterface;
use Themes\Sixteen\Filters\{HrefMenuFilter, ActiveMenuFilter, GateMenuFilter};

/**
 * Enhanced Service Provider per il tema Sixteen.
 * 
 * Questo provider gestisce la registrazione e configurazione
 * del tema Sixteen nell'applicazione Laravel, integrando il
 * nuovo Menu Builder System e le funzionalità avanzate.
<<<<<<< HEAD
>>>>>>> 90b9679 (.)
=======
>>>>>>> 7401ccb (.)
 * 
 * IMPORTANTE: Il tema Sixteen usa il namespace 'pub_theme' per le viste,
 * non 'sixteen', per essere compatibile con il sistema di temi.
 */
class ThemeServiceProvider extends XotBaseThemeServiceProvider
{
    public string $name = 'Sixteen';
    public string $nameLower = 'sixteen';
    protected string $module_dir = __DIR__ . '/../../';
    protected string $module_ns = __NAMESPACE__;

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();
        
<<<<<<< HEAD
<<<<<<< HEAD
        // Caricamento specifico per pub_theme namespace
        // IMPORTANTE: pub_theme è il namespace standard per i temi
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'pub_theme');
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'pub_theme');
        
        // Caricamento delle configurazioni del tema
        $this->loadConfigFrom(__DIR__ . '/../../config', 'sixteen');
        
        // Pubblicazione degli assets del tema
        $this->publishes([
            __DIR__ . '/../../resources/assets' => public_path('themes/sixteen/assets'),
        ], 'sixteen-assets');
        
        // Pubblicazione delle configurazioni del tema
        $this->publishes([
            __DIR__ . '/../../config' => config_path('themes/sixteen'),
        ], 'sixteen-config');
        
        // Registrazione Layout Shortcuts AGID
=======
=======
>>>>>>> 7401ccb (.)
        // Core theme loading
        $this->loadCoreThemeResources();
        
        // Menu system registration
        $this->registerMenuSystem();
        
        // View composers
        $this->registerViewComposers();
        
        // Artisan commands
        $this->registerCommands();
        
        // Publishing configurations
        $this->registerPublishing();
        
        // Authentication routes
        $this->registerAuthRoutes();
        
        // Layout shortcuts (legacy compatibility)
<<<<<<< HEAD
>>>>>>> 90b9679 (.)
=======
>>>>>>> 7401ccb (.)
        $this->registerLayoutShortcuts();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        parent::register();
        
<<<<<<< HEAD
<<<<<<< HEAD
        // Registrazione dei servizi del tema
        $this->app->singleton('sixteen.theme', function ($app) {
            return new \Themes\Sixteen\Services\ThemeService();
        });
    }

    /**
     * Registra i layout shortcuts AGID per il tema.
=======
=======
>>>>>>> 7401ccb (.)
        // Register core services
        $this->registerCoreServices();
        
        // Register menu filters
        $this->registerMenuFilters();
        
        // Register SPID/CIE services
        $this->registerAuthServices();
    }

    /**
     * Load core theme resources
     */
    protected function loadCoreThemeResources(): void
    {
        // IMPORTANTE: pub_theme è il namespace standard per i temi
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'pub_theme');
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'pub_theme');
        
        // Caricamento delle configurazioni del tema
        $this->loadConfigFrom(__DIR__ . '/../../config', 'sixteen');
    }

    /**
     * Register the Menu Builder system
     */
    protected function registerMenuSystem(): void
    {
        // Singleton per il Menu Builder
        $this->app->singleton(MenuBuilder::class, function ($app) {
            $filters = $app->tagged('sixteen.menu.filters');
            return new MenuBuilder($filters);
        });
        
        // Alias per backward compatibility
        $this->app->alias(MenuBuilder::class, 'sixteen.menu');
    }

    /**
     * Register core services
     */
    protected function registerCoreServices(): void
    {
        // Theme Service con dependency injection del MenuBuilder
        $this->app->singleton('sixteen.theme', function ($app) {
            return new ThemeService($app[MenuBuilder::class]);
        });
        
        // Alias per il ThemeService
        $this->app->alias('sixteen.theme', ThemeService::class);
    }

    /**
     * Register menu filters
     */
    protected function registerMenuFilters(): void
    {
        // Register default menu filters
        $this->app->singleton(HrefMenuFilter::class);
        $this->app->singleton(ActiveMenuFilter::class);
        $this->app->singleton(GateMenuFilter::class);
        
        // Tag them for the menu builder
        $this->app->tag([
            HrefMenuFilter::class,
            ActiveMenuFilter::class,
            GateMenuFilter::class,
        ], 'sixteen.menu.filters');
        
        // Register the interface binding for extension
        $this->app->bind(MenuFilterInterface::class, HrefMenuFilter::class);
    }

    /**
     * Register SPID/CIE authentication services
     */
    protected function registerAuthServices(): void
    {
        // Register SPID Auth Service
<<<<<<< HEAD
        $this->app->singleton(\Themes\Sixteen\Services\SpidAuthService::class, function ($app) {
            return new \Themes\Sixteen\Services\SpidAuthService();
        });
        
        // Register CIE Auth Service  
        $this->app->singleton(\Themes\Sixteen\Services\CieAuthService::class, function ($app) {
            return new \Themes\Sixteen\Services\CieAuthService();
        });
        
        // Aliases for easier access
        $this->app->alias(\Themes\Sixteen\Services\SpidAuthService::class, 'sixteen.spid');
        $this->app->alias(\Themes\Sixteen\Services\CieAuthService::class, 'sixteen.cie');
=======
        $this->app->singleton(SpidAuthService::class, function ($app) {
            return new SpidAuthService();
        });
        
        // Register CIE Auth Service  
        $this->app->singleton(CieAuthService::class, function ($app) {
            return new CieAuthService();
        });
        
        // Aliases for easier access
        $this->app->alias(SpidAuthService::class, 'sixteen.spid');
        $this->app->alias(CieAuthService::class, 'sixteen.cie');
>>>>>>> 7401ccb (.)
    }

    /**
     * Register view composers
     */
    protected function registerViewComposers(): void
    {
        // Composer per layout principali
        $this->app['view']->composer([
            'pub_theme::layouts.app',
            'pub_theme::layouts.guest',
            'pub_theme::layouts.guest-agid',
            'pub_theme::components.layout.header',
            'pub_theme::components.layout.footer',
        ], SixteenComposer::class);
    }

    /**
     * Register Artisan commands
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SixteenInstallCommand::class,
                SixteenPublishCommand::class,
            ]);
        }
    }

    /**
     * Register publishing configurations
     */
    protected function registerPublishing(): void
    {
        // Pubblicazione degli assets del tema
        $this->publishes([
            __DIR__ . '/../../resources/assets' => public_path('themes/sixteen/assets'),
            __DIR__ . '/../../public' => public_path('themes/sixteen'),
        ], 'sixteen-assets');
        
        // Pubblicazione delle configurazioni del tema
        $this->publishes([
            __DIR__ . '/../../config' => config_path('themes/sixteen'),
        ], 'sixteen-config');
        
        // Pubblicazione delle viste (opzionale per personalizzazioni)
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/themes/sixteen'),
        ], 'sixteen-views');
    }

    /**
     * Register authentication routes
     */
    protected function registerAuthRoutes(): void
    {
        if (!$this->app->routesAreCached()) {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/auth.php');
        }
    }

    /**
     * Registra i layout shortcuts AGID per il tema (legacy compatibility).
<<<<<<< HEAD
>>>>>>> 90b9679 (.)
=======
>>>>>>> 7401ccb (.)
     */
    protected function registerLayoutShortcuts(): void
    {
        // Registrazione dei layout shortcuts per facilitare l'uso
        $this->app['view']->addNamespace('layouts', __DIR__ . '/../../resources/views/layouts');
        
<<<<<<< HEAD
<<<<<<< HEAD
        // Alias per layout AGID-compliant
        $this->app['view']->composer('layouts.guest-agid', function ($view) {
            $view->with([
                'theme_name' => 'Sixteen',
                'agid_compliant' => true,
                'accessibility_level' => 'WCAG 2.1 AA'
=======
=======
>>>>>>> 7401ccb (.)
        // Enhanced composer per layout AGID-compliant
        $this->app['view']->composer('layouts.guest-agid', function ($view) {
            $themeService = app('sixteen.theme');
            
            $view->with([
                'theme_name' => 'Sixteen',
                'theme_info' => $themeService->getInfo(),
                'agid_compliant' => true,
                'accessibility_level' => 'WCAG 2.1 AA',
                'compliance_check' => $themeService->checkAgidCompliance(),
<<<<<<< HEAD
>>>>>>> 90b9679 (.)
=======
>>>>>>> 7401ccb (.)
            ]);
        });
    }
    
    /**
     * Carica le configurazioni del tema.
     */
    protected function loadConfigFrom(string $path, string $namespace): void
    {
        if (is_dir($path)) {
            foreach (glob($path . '/*.php') as $file) {
                $name = basename($file, '.php');
                $this->mergeConfigFrom($file, $namespace . '.' . $name);
            }
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 90b9679 (.)
=======
}
>>>>>>> 7401ccb (.)
