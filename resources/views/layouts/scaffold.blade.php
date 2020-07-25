@extends(config('user-manager.app_shell_template'))

@push('site-nav')
    @include('user-manager::partials.menus.site_nav')
@endpush

@push('vendor-assets')
<link href="{{ asset('vendor/user-manager/css/app.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/user-manager/js/app.js') }}" defer></script>
@endpush

@section('scaffold')
<div class="py-16">
    @yield('page')
</div>
@endsection
