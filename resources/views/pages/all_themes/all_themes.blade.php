{{-- on herite du layout active --}}
@extends($chemin_theme_actif,['title' => 'Thèmes'])

    @section('content')
        @livewire('liste-themes')
    @endsection