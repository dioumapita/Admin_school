{{-- on herite du layout activer --}}
    @extends($chemin_theme_actif,['title' => 'Etablissement'])
        @section('content')
            @livewire('infos-etablissement')
        @endsection