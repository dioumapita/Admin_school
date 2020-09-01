<div>

    @if ($CreateMode)
        @include('livewire.classes/create')
    @elseif($UpdateMode)
       @include('livewire.classes/update')   
    @else
        @include('livewire.classes/index')
    @endif

    {{-- @push('scripts') --}}
        {{-- <script src="/assets/asset_principal/js/pages/table/table_data.js"></script> --}}
        <script type="text/javascript">
            // document.addEventListener('DOMContentLoaded', function () {
                methods:{
                    form_create_classe()
                    {
                        alert("bonjour");
                    }
                }
        </script>
        
    {{-- @endpush --}}
</div>
