{{-- on herite du layout active --}}

    @extends($chemin_theme_actif,['title' => 'mon-profil'])

        @section('content')
            @livewire('mon-profil')
        @endsection