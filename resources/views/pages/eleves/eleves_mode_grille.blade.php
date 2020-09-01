    {{-- on herite du theme activer --}}
        @extends($chemin_theme_actif,['title' =>'eleves-mode-grille'])
            @section('content')
                @livewire('liste-eleve-mode-grille')
            @endsection