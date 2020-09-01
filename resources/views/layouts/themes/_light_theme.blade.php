{{-- Start include head light --}}

@include('includes.head_light/_head_light')

{{-- End include head light --}}

{{-- Start include header --}}

    @include('includes.commun/_header')

{{-- End include header --}}

{{-- Start include setting color --}}

    @include('includes.commun/_setting_color')

{{-- End include setting color --}}

{{-- Start include sidebar menu --}}

    @include('includes.commun/_sidebar_menu')

{{-- End include sidebar menu --}}

{{-- Start include content --}}

    @yield('content')

{{-- End include content --}}

{{-- Start include sidebar setting --}}

    @include('includes.commun._sidebar_setting')

{{-- End include sidebar setting --}}

{{-- Start include footer --}}

    @include('includes.commun/_footer')

{{-- End include footer --}}

{{-- Start include js_includes --}}

    @include('includes.commun/_js_includes')

{{-- End include js_includes --}}