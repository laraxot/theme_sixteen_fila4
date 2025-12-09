<?php

use function Laravel\Folio\name;

name('tickets.index');

?>

<x-layouts.app>
    {{-- AGID-compliant page header --}}
    <header class="agid-page-header py-4">
        <div class="agid-container">
            <nav aria-label="Breadcrumb" class="mb-4">
                <ol class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                    <li>
                        <a href="/" class="text-primary-600 hover:text-primary-800 focus:text-primary-800 agid-focus">
                            Home
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium" aria-current="page">Segnalazioni</span>
                    </li>
                </ol>
            </nav>

            <div class="mb-6">
                <h1 class="agid-page-title mb-2">
                    Segnalazioni cittadine
                </h1>
                <p class="agid-page-subtitle max-w-2xl">
                    Consulta le segnalazioni di disservizi presentate dai cittadini e contribuisci al miglioramento della tua città.
                </p>
            </div>
        </div>
    </header>

    {{-- Main content --}}
    <main id="main-content" class="agid-container py-8" role="main">
        {{-- Skip to content link for accessibility --}}
        <a href="#ticket-list" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary-600 text-white px-4 py-2 rounded agid-focus">
            Vai all'elenco segnalazioni
        </a>

        {{-- Include the existing ticket list component --}}
        <div id="ticket-list">
            <x-fixcity::blocks.ticket_list.agid />
        </div>
    </main>

    {{-- Additional PA-compliant footer content --}}
    <aside class="bg-gray-50 dark:bg-gray-800 py-8" role="complementary">
        <div class="agid-container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                        Come funziona
                    </h2>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-primary-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            Consulta le segnalazioni esistenti
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-primary-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            Filtra per categoria o area geografica
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-primary-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            Presenta nuove segnalazioni autenticandoti
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                        Categorie principali
                    </h2>
                    <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                        <li>• Manutenzione stradale</li>
                        <li>• Illuminazione pubblica</li>
                        <li>• Raccolta rifiuti</li>
                        <li>• Arredo urbano</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                        Hai bisogno di aiuto?
                    </h2>
                    <div class="space-y-3">
                        <a href="/supporto" class="inline-flex items-center text-primary-600 hover:text-primary-800 agid-focus">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                            Guida all'uso
                        </a>
                        <br>
                        <a href="/contatti" class="inline-flex items-center text-primary-600 hover:text-primary-800 agid-focus">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            Contatta l'ufficio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</x-layouts.app>