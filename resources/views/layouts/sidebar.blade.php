<aside class="main-sidebar sidebar-light-pink elevation-4" style="">
<a href="{{ route('home') }}" class="brand-link" style="">
                    <img src="{{ asset('test.png') }}" alt="N Logo" class="brand img-fluid img-rounded brand mx-auto w-75 d-block">

                </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
