{{-- on herite du thème actif --}}
    @extends($chemin_theme_actif,['title' => 'annee-scolaire'])

        @section('content')
            @livewire('annee-scolaire')
        @endsection