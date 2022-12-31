<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="/images/LOGOUSM.png"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3"></img>
        <span class="brand-text font-weight-light"><strong>Dashboard</strong></span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
