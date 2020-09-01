    {{-- on herite du chemin theme actif --}}
        @extends($chemin_theme_actif,['title' => 'classes-liste'])
            @section('content')
                @livewire('gestions-classes')
            @endsection