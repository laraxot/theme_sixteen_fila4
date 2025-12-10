<x-layouts.main>
<<<<<<< HEAD
>>>>>>> a153bba (.)
=======
>>>>>>> 92783b6 (.)
    {{--  
    <x-ui.marketing.header />
    --}}
    {{ $_theme->headernav() }}

    {{ $slot }}

    {{ $_theme->footer() }}

   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> a153bba (.)
=======
>>>>>>> 92783b6 (.)
   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
</x-layouts.main>
