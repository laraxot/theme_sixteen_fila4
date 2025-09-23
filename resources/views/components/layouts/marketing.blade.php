<x-layouts.main>
>>>>>>> a153bba (.)
    {{--  
    <x-ui.marketing.header />
    --}}
    {{ $_theme->headernav() }}

    {{ $slot }}

    {{ $_theme->footer() }}

   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
>>>>>>> origin/develop
>>>>>>> a153bba (.)
   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
</x-layouts.main>
