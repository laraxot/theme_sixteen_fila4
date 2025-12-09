<x-layouts.main>
    <x-section slug="header"/>
    {{--
    <x-ui.marketing.header />
    --}}
    {{ $_theme->headernav() }}

    {{ $slot }}

    {{ $_theme->footer() }}

    <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
</x-layouts.main>
