<nav class="main-header navbar navbar-expand navbar-light" style="padding: 0">
    <!-- Left navbar links -->
    @livewire('navigation-menu')
    <style>
        .bg-white{
            width: 100%;
        }
    </style>
    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="col-md-10">
                {{ $header }}
            </div>
        </header>
    @endif
</nav>

