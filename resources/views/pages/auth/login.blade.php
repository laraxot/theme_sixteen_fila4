{{-- Homepage Template - Bootstrap Italia Design System --}}
<x-layouts.main 
    title="Homepage"
    metaDescription="Portale istituzionale del Comune - Servizi digitali per i cittadini"
    :hideBreadcrumb="true">
    
    {{-- Hero Section --}}
    <section class="bg-primary-600 text-white py-16">
        <div class="container-italia">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        Benvenuto nel portale del {{ config('app.name') }}
                    </h1>
                    <p class="text-xl text-primary-100 mb-8 leading-relaxed">
                        Accedi ai servizi digitali, consulta le informazioni e resta aggiornato su tutte le iniziative del territorio.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-utilities.button 
                            variant="outline-primary" 
                            href="/servizi" 
                            class="bg-white text-primary-600 hover:bg-primary-50">
                            Esplora i servizi
                        </x-utilities.button>
                        <x-utilities.button 
                            variant="secondary" 
                            href="/contatti"
                            class="bg-primary-700 hover:bg-primary-800 border-primary-700">
                            Contatta l'ufficio
                        </x-utilities.button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="/images/hero-illustration.svg" 
                         alt="Illustrazione servizi digitali" 
                         class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    {{-- Servizi in Evidenza --}}
    <section class="py-16 bg-white">
        <div class="container-italia">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-italia-gray-900 mb-4">
                    Servizi in evidenza
                </h2>
                <p class="text-lg text-italia-gray-600 max-w-2xl mx-auto">
                    I servizi più richiesti dai cittadini, sempre disponibili online
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Servizio 1 --}}
                <x-data-display.card 
                    title="Certificati Anagrafici"
                    subtitle="Richiedi online"
                    hover
                    clickable
                    href="/servizi/certificati">
                    <p class="text-italia-gray-600 mb-4">
                        Richiedi e scarica certificati di nascita, residenza e stato di famiglia direttamente online.
                    </p>
                    <div class="flex items-center text-primary-600 font-medium">
                        <span>Vai al servizio</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </x-data-display.card>

                {{-- Servizio 2 --}}
                <x-data-display.card 
                    title="Pagamenti Tributi"
                    subtitle="PagoPA"
                    hover
                    clickable
                    href="/servizi/pagamenti">
                    <p class="text-italia-gray-600 mb-4">
                        Paga tasse, multe e tributi comunali in modo sicuro con il sistema PagoPA.
                    </p>
                    <div class="flex items-center text-primary-600 font-medium">
                        <span>Vai al servizio</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </x-data-display.card>

                {{-- Servizio 3 --}}
                <x-data-display.card 
                    title="Pratiche Edilizie"
                    subtitle="SUAP Online"
                    hover
                    clickable
                    href="/servizi/edilizia">
                    <p class="text-italia-gray-600 mb-4">
                        Presenta pratiche edilizie, richieste di permessi e consulta lo stato delle procedure.
                    </p>
                    <div class="flex items-center text-primary-600 font-medium">
                        <span>Vai al servizio</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </x-data-display.card>
            </div>
            
            <div class="text-center mt-10">
                <x-utilities.button variant="outline-primary" href="/servizi">
                    Tutti i servizi
                </x-utilities.button>
            </div>
        </div>
    </section>

    {{-- Notizie --}}
    <section class="py-16 bg-italia-gray-50">
        <div class="container-italia">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-italia-gray-900 mb-2">
                        Ultime notizie
                    </h2>
                    <p class="text-italia-gray-600">
                        Resta aggiornato su eventi e iniziative del territorio
                    </p>
                </div>
                <x-utilities.button variant="outline-primary" href="/notizie">
                    Tutte le notizie
                </x-utilities.button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Notizia 1 --}}
                <x-data-display.card 
                    title="Nuovi orari uffici comunali"
                    image="/images/news-1.jpg"
                    imageAlt="Uffici comunali"
                    hover
                    clickable
                    href="/notizie/nuovi-orari-uffici">
                    <p class="text-sm text-italia-gray-500 mb-2">15 Gennaio 2024</p>
                    <p class="text-italia-gray-600">
                        A partire da lunedì 22 gennaio entreranno in vigore i nuovi orari di apertura al pubblico degli uffici comunali.
                    </p>
                </x-data-display.card>

<x-layouts.app>
    <x-slot name="title">
        {{ __('Login') }}
    </x-slot>

    <!-- Beautiful Login Page Section -->
    <section class="login-page-bg flex items-center justify-center p-4">
        <div class="fade-in-up w-full max-w-md">
            <!-- Floating Header -->
            <div class="text-center mb-8">
                <div class="login-icon mx-auto mb-6 fade-in-scale">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-white mb-4 drop-shadow-lg">
                    {{ __('Accedi ai servizi') }}
                </h1>
                <p class="text-white/90 text-lg drop-shadow">
                    {{ __('Utilizza le tue credenziali per accedere alla piattaforma') }}
                </p>
            </div>
            --}}
            <!-- Login Widget -->
            @livewire(\Modules\User\Filament\Widgets\Auth\LoginWidget::class)

            <!-- Beautiful Registration CTA -->
            @if (Route::has('register'))
                <div class="registration-cta mt-8 fade-in-up">
                    <p class="text-gray-700 mb-4 font-medium">
                        {{ __('Non hai ancora un account?') }}
                    </p>
                    <a href="{{ route('register') }}" class="registration-button">
                        {{ __('Crea il tuo account') }}
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            @endif
            {{--  
            <!-- Beautiful Alternative Access Methods -->
            <div class="mt-8 space-y-4 fade-in-up">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-white/30"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white/90 text-gray-700 font-semibold rounded-full backdrop-blur">{{ __('Oppure accedi con') }}</span>
                    </div>
                </div>

                <!-- SPID Button -->
                <button type="button" class="alt-login-button spid-button" disabled>
                    <img src="https://www.spid.gov.it/assets/img/spid-ico-circle-bb.svg" alt="SPID" class="h-5 w-5 mr-2">
                    {{ __('Entra con SPID') }}
                    <span class="ml-2 text-xs opacity-60">({{ __('Prossimamente') }})</span>
                </button>

                <!-- CIE Button -->
                <button type="button" class="alt-login-button cie-button" disabled>
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                    {{ __('Entra con CIE 3.0') }}
                    <span class="ml-2 text-xs opacity-60">({{ __('Prossimamente') }})</span>
                </button>
            </div>

            <!-- Beautiful Accessibility Footer -->
            <div class="text-center text-xs text-white/80 mt-8 p-4 bg-white/10 rounded-xl border border-white/20 backdrop-blur-sm fade-in-up">
                <p class="mb-2">
                    <strong>{{ __('Accessibilità') }}:</strong> {{ __('Conforme a WCAG 2.1 AA') }} •
                    <a href="{{ route('pages.view', ['slug' => 'accessibility']) }}"
                       class="text-white underline hover:text-blue-100 transition-colors">
                        {{ __('Dichiarazione di accessibilità') }}
                    </a>
                </p>
                <p>
                    <strong>{{ __('Navigazione') }}:</strong> {{ __('Tab per spostarsi • Invio per confermare') }}
                </p>
            </div>
            --}}
        </div>
    </section>

</x-layouts.app>
