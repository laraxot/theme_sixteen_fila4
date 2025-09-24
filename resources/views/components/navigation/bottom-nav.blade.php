<<<<<<< HEAD
{{--
/**
 * Bottom Navigation Component - Bootstrap Italia Compliant
 * 
 * Bottom navigation component for mobile-friendly navigation
 * Fully accessible with ARIA attributes and AGID design compliance
 * 
 * @param bool $fixed Whether the navigation is fixed to bottom
 * @param string $variant Navigation variant: 'default', 'minimal', 'extended'
 * @param string $size Navigation size: 'sm', 'md', 'lg'
 * @param string $id Custom ID for the navigation
 * @param string $class Additional CSS classes
 * @param bool $showLabels Whether to show labels under icons
 * @param string $background Background color: 'white', 'dark', 'primary'
 * @param bool $shadow Whether to show shadow
=======
{{-- 
/**
 * Bottom Navigation Component - Bootstrap Italia Compliant
 * 
 * Mobile-first bottom navigation bar for quick access to main sections
 * Typically used for mobile interfaces and progressive web apps
 * 
 * @param string $id Unique ID for the bottom navigation
 * @param array $items Navigation items with labels, icons, and URLs
 * @param bool $fixed Whether to use fixed positioning
 * @param bool $badges Whether to show badge indicators on items
 * @param string $theme Theme variant: 'light' or 'dark'
 * @param bool $hiddenOnDesktop Whether to hide on desktop viewports
>>>>>>> a3dca9d (.)
 */
--}}

@props([
<<<<<<< HEAD
    'fixed' => true,
    'variant' => 'default', // 'default', 'minimal', 'extended'
    'size' => 'md', // 'sm', 'md', 'lg'
    'id' => null,
    'class' => '',
    'showLabels' => true,
    'background' => 'white', // 'white', 'dark', 'primary'
    'shadow' => true
])

@php
    $navId = $id ?? 'bottom-nav-' . uniqid();
    $navClasses = collect(['bottom-nav']);
    
    // Fixed positioning
    if ($fixed) {
        $navClasses->push('bottom-nav-fixed');
    }
    
    // Variant classes
    if ($variant !== 'default') {
        $navClasses->push('bottom-nav-' . $variant);
    }
    
    // Size classes
    if ($size !== 'md') {
        $navClasses->push('bottom-nav-' . $size);
    }
    
    // Background classes
    if ($background !== 'white') {
        $navClasses->push('bottom-nav-' . $background);
    }
    
    // Shadow
    if ($shadow) {
        $navClasses->push('bottom-nav-shadow');
    }
    
    // Additional classes
    if ($class) {
        $navClasses->push($class);
    }
    
    $navLinkClasses = collect(['nav-link']);
    
    if (!$showLabels) {
        $navLinkClasses->push('nav-link-icon-only');
    }
    
    if ($size === 'sm') {
        $navLinkClasses->push('nav-link-sm');
    } elseif ($size === 'lg') {
        $navLinkClasses->push('nav-link-lg');
=======
    'id' => 'bottom-nav-' . uniqid(),
    'items' => [],
    'fixed' => true,
    'badges' => false,
    'theme' => 'light', // 'light' or 'dark'
    'hiddenOnDesktop' => true
])

@php
    $navClasses = collect(['bottom-nav']);
    
    if ($fixed) {
        $navClasses->push('fixed-bottom');
    }
    
    if ($theme === 'dark') {
        $navClasses->push('bg-dark', 'navbar-dark');
    } else {
        $navClasses->push('bg-white', 'border-top');
    }
    
    if ($hiddenOnDesktop) {
        $navClasses->push('d-lg-none');
>>>>>>> a3dca9d (.)
    }
@endphp

<nav 
<<<<<<< HEAD
    class="{{ $navClasses->implode(' ') }}"
    id="{{ $navId }}"
    role="navigation"
    aria-label="Navigazione principale"
    {{ $attributes->except(['fixed', 'variant', 'size', 'id', 'class', 'showLabels', 'background', 'shadow']) }}
>
    <div class="bottom-nav-container">
        <div class="bottom-nav-content">
            @if(isset($links))
                {{ $links }}
            @else
                {{ $slot }}
            @endif
        </div>
    </div>
</nav>

{{-- Custom CSS for AGID-compliant bottom navigation styling --}}
<style>
.bottom-nav {
    background-color: #ffffff;
    border-top: 1px solid #dee2e6;
    padding: 0.5rem 0;
    transition: all 0.3s ease;
}

.bottom-nav-fixed {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.bottom-nav-shadow {
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
}

.bottom-nav-container {
    max-width: 100%;
    margin: 0 auto;
    padding: 0 1rem;
}

.bottom-nav-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
    gap: 0.5rem;
}

.bottom-nav .nav-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0.5rem;
    color: #6c757d;
    text-decoration: none;
    border-radius: 0.375rem;
    transition: all 0.2s ease;
    min-width: 60px;
    position: relative;
}

.bottom-nav .nav-link:hover {
    color: var(--italia-blue-600);
    background-color: #f8f9fa;
    text-decoration: none;
}

.bottom-nav .nav-link.active {
    color: var(--italia-blue-600);
    background-color: var(--italia-blue-50);
}

.bottom-nav .nav-link .icon {
    width: 1.25rem;
    height: 1.25rem;
    margin-bottom: 0.25rem;
}

.bottom-nav .nav-link .bottom-nav-label {
    font-size: 0.75rem;
    font-weight: 500;
    text-align: center;
    line-height: 1.2;
}

/* Icon only variant */
.bottom-nav .nav-link.nav-link-icon-only {
    min-width: 48px;
}

.bottom-nav .nav-link.nav-link-icon-only .icon {
    margin-bottom: 0;
}

/* Size variants */
.bottom-nav-sm .nav-link {
    padding: 0.375rem;
    min-width: 48px;
}

.bottom-nav-sm .nav-link .icon {
    width: 1rem;
    height: 1rem;
}

.bottom-nav-sm .nav-link .bottom-nav-label {
    font-size: 0.625rem;
}

.bottom-nav-lg .nav-link {
    padding: 0.75rem;
    min-width: 80px;
}

.bottom-nav-lg .nav-link .icon {
    width: 1.5rem;
    height: 1.5rem;
    margin-bottom: 0.5rem;
}

.bottom-nav-lg .nav-link .bottom-nav-label {
    font-size: 0.875rem;
}

/* Variant styles */
.bottom-nav-minimal {
    background-color: transparent;
    border-top: none;
    padding: 0.25rem 0;
}

.bottom-nav-minimal .nav-link {
    padding: 0.25rem;
    min-width: 40px;
}

.bottom-nav-extended {
    padding: 1rem 0;
}

.bottom-nav-extended .nav-link {
    padding: 0.75rem 1rem;
    min-width: 100px;
}

/* Background variants */
.bottom-nav-dark {
    background-color: #212529;
    border-top-color: #495057;
}

.bottom-nav-dark .nav-link {
    color: #adb5bd;
}

.bottom-nav-dark .nav-link:hover {
    color: #ffffff;
    background-color: #495057;
}

.bottom-nav-dark .nav-link.active {
    color: #ffffff;
    background-color: var(--italia-blue-600);
}

.bottom-nav-primary {
    background-color: var(--italia-blue-500);
    border-top-color: var(--italia-blue-600);
}

.bottom-nav-primary .nav-link {
    color: rgba(255, 255, 255, 0.8);
}

.bottom-nav-primary .nav-link:hover {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.1);
}

.bottom-nav-primary .nav-link.active {
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.2);
}

/* Badge support */
.bottom-nav .nav-link .badge {
    position: absolute;
    top: 0.25rem;
    right: 0.25rem;
    font-size: 0.625rem;
    padding: 0.125rem 0.25rem;
    border-radius: 0.25rem;
}

/* High contrast mode support */
.high-contrast .bottom-nav {
    background-color: #ffffff;
    border-top-color: #000000;
    border-top-width: 2px;
}

.high-contrast .bottom-nav .nav-link {
    color: #000000;
    border: 1px solid transparent;
}

.high-contrast .bottom-nav .nav-link:hover {
    color: #000000;
    background-color: #f0f0f0;
    border-color: #000000;
}

.high-contrast .bottom-nav .nav-link.active {
    color: #000000;
    background-color: #000000;
    color: #ffffff;
    border-color: #000000;
}

/* Focus styles */
.bottom-nav .nav-link:focus {
    outline: 2px solid var(--italia-blue-500);
    outline-offset: 2px;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .bottom-nav-container {
        padding: 0 0.5rem;
    }
    
    .bottom-nav-content {
        gap: 0.25rem;
    }
    
    .bottom-nav .nav-link {
        min-width: 50px;
        padding: 0.375rem;
    }
    
    .bottom-nav .nav-link .icon {
        width: 1rem;
        height: 1rem;
    }
    
    .bottom-nav .nav-link .bottom-nav-label {
        font-size: 0.625rem;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    .bottom-nav,
    .bottom-nav .nav-link {
        transition: none;
    }
}

/* Safe area support for mobile devices */
@supports (padding-bottom: env(safe-area-inset-bottom)) {
    .bottom-nav-fixed {
        padding-bottom: calc(0.5rem + env(safe-area-inset-bottom));
=======
    class="{{ $navClasses->implode(' ') }}" 
    id="{{ $id }}"
    role="navigation"
    aria-label="Navigazione principale mobile"
>
    <div class="container-fluid">
        @if(!empty($items))
            <ul class="nav nav-fill w-100" role="menubar">
                @foreach($items as $index => $item)
                    @php
                        $itemClasses = collect(['nav-item']);
                        $linkClasses = collect(['nav-link', 'text-center', 'd-flex', 'flex-column', 'align-items-center', 'justify-content-center']);
                        
                        if (isset($item['active']) && $item['active']) {
                            $linkClasses->push('active');
                            $itemClasses->push('active');
                        }
                        
                        if (isset($item['disabled']) && $item['disabled']) {
                            $linkClasses->push('disabled');
                        }
                    @endphp
                    
                    <li class="{{ $itemClasses->implode(' ') }}" role="none">
                        @if(isset($item['disabled']) && $item['disabled'])
                            <span 
                                class="{{ $linkClasses->implode(' ') }}" 
                                role="menuitem"
                                aria-disabled="true"
                            >
                                @if(isset($item['icon']))
                                    <svg class="icon icon-sm mb-1" aria-hidden="true">
                                        <use href="#{{ $item['icon'] }}"></use>
                                    </svg>
                                @endif
                                
                                <small class="bottom-nav-label">
                                    {{ $item['label'] }}
                                    @if($badges && isset($item['badge']))
                                        <span class="badge badge-sm bg-danger ms-1">{{ $item['badge'] }}</span>
                                    @endif
                                </small>
                            </span>
                        @else
                            <a 
                                href="{{ $item['url'] ?? '#' }}" 
                                class="{{ $linkClasses->implode(' ') }}"
                                role="menuitem"
                                @if(isset($item['target'])) target="{{ $item['target'] }}" @endif
                                @if(isset($item['title'])) title="{{ $item['title'] }}" @endif
                                @if(isset($item['active']) && $item['active']) aria-current="page" @endif
                            >
                                @if(isset($item['icon']))
                                    <svg class="icon icon-sm mb-1" aria-hidden="true">
                                        <use href="#{{ $item['icon'] }}"></use>
                                    </svg>
                                @endif
                                
                                <small class="bottom-nav-label">
                                    {{ $item['label'] }}
                                    @if($badges && isset($item['badge']) && $item['badge'] > 0)
                                        <span class="badge badge-sm bg-danger ms-1" aria-label="{{ $item['badge'] }} {{ $item['badgeLabel'] ?? 'notifiche' }}">
                                            {{ $item['badge'] }}
                                        </span>
                                    @endif
                                </small>
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            {{-- Slot-based content --}}
            <div class="nav nav-fill w-100">
                {{ $slot }}
            </div>
        @endif
    </div>
</nav>

{{-- Custom Styles for Bottom Navigation --}}
<style>
.bottom-nav {
    min-height: 64px;
    z-index: 1030;
    box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
}

.bottom-nav .nav-link {
    padding: 8px 4px;
    min-height: 56px;
    font-size: 0.75rem;
    line-height: 1;
    border: none;
    background: transparent;
    transition: all 0.2s ease;
}

.bottom-nav .nav-link:hover,
.bottom-nav .nav-link:focus {
    background-color: rgba(0,123,255,0.1);
}

.bottom-nav .nav-link.active {
    color: #0066CC;
    font-weight: 600;
}

.bottom-nav .nav-link.active .icon {
    color: #0066CC;
}

.bottom-nav .nav-link.disabled {
    opacity: 0.5;
    pointer-events: none;
}

.bottom-nav .icon {
    width: 24px;
    height: 24px;
    flex-shrink: 0;
}

.bottom-nav .bottom-nav-label {
    display: block;
    margin-top: 2px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100%;
}

.bottom-nav .badge {
    position: relative;
    top: -2px;
}

/* Dark theme styles */
.bottom-nav.bg-dark .nav-link:hover,
.bottom-nav.bg-dark .nav-link:focus {
    background-color: rgba(255,255,255,0.1);
}

.bottom-nav.bg-dark .nav-link.active {
    color: #66B3FF;
}

.bottom-nav.bg-dark .nav-link.active .icon {
    color: #66B3FF;
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .bottom-nav .bottom-nav-label {
        font-size: 0.65rem;
    }
    
    .bottom-nav .icon {
        width: 20px;
        height: 20px;
>>>>>>> a3dca9d (.)
    }
}
</style>

<<<<<<< HEAD
{{-- JavaScript for bottom navigation functionality --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const bottomNavs = document.querySelectorAll('.bottom-nav');
    
    bottomNavs.forEach(function(nav) {
        const links = nav.querySelectorAll('.nav-link');
        
        // Handle link clicks
        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Remove active class from all links
                links.forEach(function(otherLink) {
                    otherLink.classList.remove('active');
                });
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Trigger custom event
                nav.dispatchEvent(new CustomEvent('bottomNavChanged', {
                    detail: { 
                        activeLink: this,
                        href: this.getAttribute('href')
                    }
                }));
            });
        });
        
        // Keyboard navigation
        links.forEach(function(link) {
            link.addEventListener('keydown', function(e) {
                const currentIndex = Array.from(links).indexOf(this);
                let targetIndex;
                
                switch(e.key) {
                    case 'ArrowLeft':
                        e.preventDefault();
                        targetIndex = currentIndex > 0 ? currentIndex - 1 : links.length - 1;
                        break;
                    case 'ArrowRight':
                        e.preventDefault();
                        targetIndex = currentIndex < links.length - 1 ? currentIndex + 1 : 0;
                        break;
                    case 'Home':
                        e.preventDefault();
                        targetIndex = 0;
                        break;
                    case 'End':
                        e.preventDefault();
                        targetIndex = links.length - 1;
                        break;
                    default:
                        return;
                }
                
                if (targetIndex !== undefined) {
                    links[targetIndex].focus();
                }
            });
        });
        
        // Auto-hide on scroll (optional)
        let lastScrollTop = 0;
        const nav = nav;
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                nav.style.transform = 'translateY(100%)';
            } else {
                // Scrolling up
                nav.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        });
    });
});
</script>

=======
>>>>>>> a3dca9d (.)
{{-- 
Usage Examples:

1. Basic bottom navigation:
<<<<<<< HEAD
<x-pub_theme::navigation.bottom-nav>
    <x-slot name="links">
        <a href="#" class="nav-link active">
            <svg class="icon"><use href="#it-home"></use></svg>
            <span class="bottom-nav-label">Home</span>
        </a>
        <a href="#" class="nav-link">
            <svg class="icon"><use href="#it-search"></use></svg>
            <span class="bottom-nav-label">Search</span>
        </a>
        <a href="#" class="nav-link">
            <svg class="icon"><use href="#it-user"></use></svg>
            <span class="bottom-nav-label">Profile</span>
        </a>
    </x-slot>
</x-pub_theme::navigation.bottom-nav>

2. Fixed bottom navigation:
<x-pub_theme::navigation.bottom-nav :fixed="true">
    <x-slot name="links">
        <a href="#" class="nav-link active">
            <svg class="icon"><use href="#it-home"></use></svg>
            <span class="bottom-nav-label">Home</span>
        </a>
    </x-slot>
</x-pub_theme::navigation.bottom-nav>

3. Minimal variant:
<x-pub_theme::navigation.bottom-nav variant="minimal">
    <x-slot name="links">
        <a href="#" class="nav-link active">
            <svg class="icon"><use href="#it-home"></use></svg>
            <span class="bottom-nav-label">Home</span>
        </a>
    </x-slot>
</x-pub_theme::navigation.bottom-nav>

4. Dark background:
<x-pub_theme::navigation.bottom-nav background="dark">
    <x-slot name="links">
        <a href="#" class="nav-link active">
            <svg class="icon"><use href="#it-home"></use></svg>
            <span class="bottom-nav-label">Home</span>
        </a>
    </x-slot>
</x-pub_theme::navigation.bottom-nav>

5. Icon only (no labels):
<x-pub_theme::navigation.bottom-nav :show-labels="false">
    <x-slot name="links">
        <a href="#" class="nav-link active">
            <svg class="icon"><use href="#it-home"></use></svg>
        </a>
    </x-slot>
</x-pub_theme::navigation.bottom-nav>

6. With badges:
<x-pub_theme::navigation.bottom-nav>
    <x-slot name="links">
        <a href="#" class="nav-link">
            <svg class="icon"><use href="#it-bell"></use></svg>
            <span class="bottom-nav-label">Notifications</span>
            <span class="badge bg-danger">3</span>
        </a>
    </x-slot>
</x-pub_theme::navigation.bottom-nav>

7. Different sizes:
<x-pub_theme::navigation.bottom-nav size="sm">
    <!-- Small bottom navigation -->
</x-pub_theme::navigation.bottom-nav>

<x-pub_theme::navigation.bottom-nav size="lg">
    <!-- Large bottom navigation -->
</x-pub_theme::navigation.bottom-nav>

8. With custom event handling:
<script>
document.addEventListener('bottomNavChanged', function(event) {
    console.log('Bottom nav changed:', event.detail);
    // Custom logic when navigation changes
});
</script>

Accessibility Features:
- Proper ARIA attributes (role="navigation", aria-label)
- Keyboard navigation (Arrow keys, Home, End)
- Screen reader friendly
- Focus management
- High contrast mode support
- Semantic HTML structure

AGID Design System Compliance:
- Uses official AGID color palette
- Follows Italian PA design guidelines
- Bootstrap Italia compatible styling
- Mobile-first responsive design
- Consistent with government standards

Performance Considerations:
- Lightweight JavaScript implementation
- Efficient DOM manipulation
- CSS-only animations where possible
- Optimized for mobile devices
- Minimal JavaScript footprint
- Safe area support for mobile devices
--}}
=======
<x-pub_theme::bottom-nav 
    :items="[
        ['label' => 'Home', 'url' => '/', 'icon' => 'it-home', 'active' => true],
        ['label' => 'Servizi', 'url' => '/servizi', 'icon' => 'it-settings'],
        ['label' => 'Notizie', 'url' => '/notizie', 'icon' => 'it-file'],
        ['label' => 'Contatti', 'url' => '/contatti', 'icon' => 'it-mail']
    ]" />

2. Bottom nav with badges:
<x-pub_theme::bottom-nav 
    :badges="true"
    :items="[
        ['label' => 'Home', 'url' => '/', 'icon' => 'it-home'],
        ['label' => 'Messaggi', 'url' => '/messaggi', 'icon' => 'it-comment', 'badge' => 3, 'badgeLabel' => 'messaggi non letti'],
        ['label' => 'Notifiche', 'url' => '/notifiche', 'icon' => 'it-bell', 'badge' => 12, 'badgeLabel' => 'notifiche'],
        ['label' => 'Profilo', 'url' => '/profilo', 'icon' => 'it-user']
    ]" />

3. Dark theme bottom navigation:
<x-pub_theme::bottom-nav 
    theme="dark"
    :items="[
        ['label' => 'Dashboard', 'url' => '/dashboard', 'icon' => 'it-chart-line'],
        ['label' => 'Documenti', 'url' => '/documenti', 'icon' => 'it-folder'],
        ['label' => 'Scadenze', 'url' => '/scadenze', 'icon' => 'it-calendar'],
        ['label' => 'Impostazioni', 'url' => '/impostazioni', 'icon' => 'it-settings']
    ]" />

4. Non-fixed bottom navigation (visible on desktop):
<x-pub_theme::bottom-nav 
    :fixed="false"
    :hidden-on-desktop="false"
    :items="[
        ['label' => 'Panoramica', 'url' => '/panoramica', 'icon' => 'it-chart-bar'],
        ['label' => 'Statistiche', 'url' => '/statistiche', 'icon' => 'it-chart-line'],
        ['label' => 'Report', 'url' => '/report', 'icon' => 'it-file'],
        ['label' => 'Esporta', 'url' => '/esporta', 'icon' => 'it-download']
    ]" />

5. Bottom nav with mixed states:
<x-pub_theme::bottom-nav 
    :items="[
        ['label' => 'Principale', 'url' => '/', 'icon' => 'it-home', 'active' => true],
        ['label' => 'Ricerca', 'url' => '/ricerca', 'icon' => 'it-search'],
        ['label' => 'In arrivo', 'url' => '#', 'icon' => 'it-plus-circle', 'disabled' => true, 'title' => 'Funzionalità in arrivo'],
        ['label' => 'Menu', 'url' => '/menu', 'icon' => 'it-burger']
    ]" />

6. Custom content with slot:
<x-pub_theme::bottom-nav>
    <a href="/" class="nav-link text-center d-flex flex-column align-items-center active">
        <svg class="icon icon-sm mb-1">
            <use href="#it-home"></use>
        </svg>
        <small>Home</small>
    </a>
    
    <a href="/custom" class="nav-link text-center d-flex flex-column align-items-center">
        <svg class="icon icon-sm mb-1">
            <use href="#it-star-outline"></use>
        </svg>
        <small>Custom</small>
    </a>
    
    <button class="nav-link text-center d-flex flex-column align-items-center" onclick="openModal()">
        <svg class="icon icon-sm mb-1">
            <use href="#it-plus"></use>
        </svg>
        <small>Azione</small>
    </button>
</x-pub_theme::bottom-nav>

7. Administrative area navigation:
<x-pub_theme::bottom-nav 
    :badges="true"
    :items="[
        ['label' => 'Dashboard', 'url' => '/admin', 'icon' => 'it-chart-bar', 'active' => true],
        ['label' => 'Pratiche', 'url' => '/admin/pratiche', 'icon' => 'it-file', 'badge' => 5, 'badgeLabel' => 'pratiche in sospeso'],
        ['label' => 'Cittadini', 'url' => '/admin/cittadini', 'icon' => 'it-user'],
        ['label' => 'Sistema', 'url' => '/admin/sistema', 'icon' => 'it-settings']
    ]" />

Responsive Behavior:
- By default, bottom navigation is hidden on desktop (lg breakpoint and above)
- Use :hidden-on-desktop="false" to show on all screen sizes
- Icons and text size adjust for smaller screens
- Touch-friendly hit targets (minimum 44px)

Accessibility Features:
- Proper ARIA roles and labels
- Screen reader friendly badge announcements
- Keyboard navigation support
- Active state indication with aria-current
- Disabled state with aria-disabled

Bootstrap Italia Integration:
- Uses standard Bootstrap Italia icon set
- Follows PA color schemes and accessibility guidelines
- Compatible with Bootstrap Italia navigation patterns
- Supports both light and dark themes
--}}
>>>>>>> a3dca9d (.)
