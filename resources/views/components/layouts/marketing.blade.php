<x-layouts.main>
>>>>>>> origin/develop
    {{--  
    <x-ui.marketing.header />
    --}}
    {{ $_theme->headernav() }}

    {{ $slot }}

    {{ $_theme->footer() }}

   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
>>>>>>> b93ef594b4 (.)
>>>>>>> origin/develop
   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
</x-layouts.main>
