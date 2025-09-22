<?php

declare(strict_types=1);

namespace Themes\Sixteen\Services;

<<<<<<< HEAD
<<<<<<< HEAD
use InvalidArgumentException;
use Themes\Sixteen\Services\MenuBuilder;

=======
<<<<<<< HEAD
use Themes\Sixteen\Services\MenuBuilder;

=======
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
use Themes\Sixteen\Services\MenuBuilder;

>>>>>>> 0eb3291 (.)
/**
 * Servizio per la gestione del tema Sixteen.
 * 
 * Questo servizio fornisce metodi per la gestione
 * delle configurazioni e funzionalità del tema.
<<<<<<< HEAD
<<<<<<< HEAD
 * 
 * Enhanced version integrating with the new Menu Builder System
=======
<<<<<<< HEAD
 * 
 * Enhanced version integrating with the new Menu Builder System
=======
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
 * 
 * Enhanced version integrating with the new Menu Builder System
>>>>>>> 0eb3291 (.)
 */
class ThemeService
{
    /**
     * Nome del tema.
     */
    protected string $themeName = 'Sixteen';

    /**
     * Versione del tema.
     */
    protected string $version = '1.0.0';

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
    public function __construct(
        protected MenuBuilder $menuBuilder
    ) {
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Ottiene il nome del tema.
     */
    public function getName(): string
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0eb3291 (.)
     * Restituisce il nome del tema.
     *
     * @return string
     */
    public function getThemeName(): string
<<<<<<< HEAD
=======
     * Ottiene il nome del tema.
     */
    public function getName(): string
>>>>>>> a12f125f4a (.)
=======
     * Restituisce il nome del tema.
     *
     * @return string
     */
    public function getThemeName(): string
>>>>>>> b93ef594b4 (.)
=======
    /**
     * Ottiene il nome del tema.
     */
    public function getName(): string
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
    {
        return $this->themeName;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Ottiene la versione del tema.
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Restituisce la versione del tema.
     *
     * @return string
=======
     * Ottiene la versione del tema.
>>>>>>> a12f125f4a (.)
=======
     * Restituisce la versione del tema.
     *
     * @return string
>>>>>>> b93ef594b4 (.)
=======
     * Ottiene la versione del tema.
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
     * Restituisce la versione del tema.
     *
     * @return string
>>>>>>> 0eb3291 (.)
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Ottiene le informazioni del tema.
     */
    public function getInfo(): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0eb3291 (.)
     * Restituisce la configurazione del tema.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array
<<<<<<< HEAD
=======
     * Ottiene le informazioni del tema.
     */
    public function getInfo(): array
>>>>>>> a12f125f4a (.)
=======
     * Restituisce la configurazione del tema.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array
>>>>>>> b93ef594b4 (.)
=======
     * Ottiene le informazioni del tema.
     */
    public function getInfo(): array
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
    {
        return [
            'name' => $this->themeName,
            'version' => $this->version,
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 0eb3291 (.)
            'author' => 'Laraxot Team',
            'description' => 'Modern responsive theme for Laraxot applications',
            'features' => [
                'responsive_design',
                'dark_mode_support',
                'component_library',
                'accessibility_compliant',
            ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b07ab (.)
            'description' => 'Tema Sixteen per SaluteOra - AGID Bootstrap Italia compliant',
            'author' => 'SaluteOra Team',
            'agid_compliant' => true,
            'bootstrap_italia' => true,
            'tailwind_css' => true,
            'accessibility' => 'WCAG 2.1 AA',
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            'description' => 'Tema Sixteen per SaluteOra',
            'author' => 'SaluteOra Team',
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
        ];
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Verifica se il tema è attivo.
     */
    public function isActive(): bool
    {
        return config('app.theme') === 'sixteen';
    }

    /**
     * Ottiene le configurazioni del tema.
     */
    public function getConfig(string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return config('sixteen');
        }

        return config('sixteen.' . $key, $default);
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0eb3291 (.)
     * Costruisce il menu usando il MenuBuilder.
     *
     * @return array<string, mixed>
     */
    public function buildMenu(): array
    {
        return $this->menuBuilder->build();
    }

    /**
     * Inizializza le risorse del tema.
     *
     * @return void
     */
    public function initialize(): void
    {
        // Caricamento delle risorse CSS e JS
        // Configurazione dei componenti del tema
        // Setup delle configurazioni specifiche
    }
}
<<<<<<< HEAD
=======
     * Verifica se il tema è attivo.
=======
     * Costruisce il menu usando il MenuBuilder.
     *
     * @return array<string, mixed>
>>>>>>> b93ef594b4 (.)
     */
    public function buildMenu(): array
    {
        return $this->menuBuilder->build();
    }

    /**
     * Inizializza le risorse del tema.
     *
     * @return void
     */
    public function initialize(): void
    {
        // Caricamento delle risorse CSS e JS
        // Configurazione dei componenti del tema
        // Setup delle configurazioni specifiche
    }
<<<<<<< HEAD
>>>>>>> c8b07ab (.)

    /**
     * Ottiene il Menu Builder per accesso diretto ai menu
     */
    public function getMenuBuilder(): MenuBuilder
    {
        return $this->menuBuilder;
    }

    /**
     * Ottiene i menu compilati per una location specifica
     */
    public function getMenu(string $location): array
    {
        return match ($location) {
            'slim_header' => $this->menuBuilder->getSlimHeader()->toArray(),
            'header' => $this->menuBuilder->getHeader()->toArray(),
            'footer' => $this->menuBuilder->getFooter()->toArray(),
            'footer_bar' => $this->menuBuilder->getFooterBar()->toArray(),
<<<<<<< HEAD
            default => throw new InvalidArgumentException("Unknown menu location: {$location}")
=======
            default => throw new \InvalidArgumentException("Unknown menu location: {$location}")
>>>>>>> c8b07ab (.)
        };
    }

    /**
     * Verifica la compliance AGID del tema
     */
    public function checkAgidCompliance(): array
    {
        return [
            'bootstrap_italia' => true,
            'wcag_2_1_aa' => $this->getConfig('accessibility.screen_reader_content', true),
            'skip_links' => $this->getConfig('accessibility.skip_links', true),
            'keyboard_navigation' => $this->getConfig('accessibility.keyboard_navigation', true),
            'cookiebar' => $this->getConfig('layout.cookiebar', true),
            'breadcrumbs' => $this->getConfig('layout.breadcrumbs.enabled', true),
        ];
    }

    /**
     * Ottiene statistiche sui componenti implementati
     */
    public function getComponentStats(): array
    {
        // Questa sarà espansa con il progress del tema
        return [
            'total_agid_components' => 54,
            'implemented' => 26,
            'compliance_percentage' => 48,
            'critical_missing' => ['dropdown', 'pagination', 'spid_integration'],
            'status' => 'in_development'
        ];
    }
<<<<<<< HEAD
} 
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
     * Verifica se il tema è attivo.
     */
    public function isActive(): bool
    {
        return config('app.theme') === 'sixteen';
    }

    /**
     * Ottiene le configurazioni del tema.
     */
    public function getConfig(string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return config('sixteen');
        }

        return config('sixteen.' . $key, $default);
    }
} 
>>>>>>> origin/develop
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
