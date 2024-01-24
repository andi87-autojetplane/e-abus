<div class="min-h-screen bg-gray-100">
    @include('layouts.landingpagesys.navigation')

    @include('layouts.landingpagesys.jumbotron')

    <!-- Page Heading -->

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @include('layouts.landingpagesys.footer')
</div>
