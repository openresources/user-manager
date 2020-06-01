@extends(config('user-manager.app_scaffold_template'))

@push('vendor-assets')
<link href="{{ asset('vendor/user-manager/css/app.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/user-manager/js/app.js') }}" defer></script>
@endpush

@push('styles')
<livewire:styles>
@endpush

    @section('page')
    <nav class="menu-bar" role="menubar">
        <div class="container mx-auto">
            <ul class="flex items-center justify-between text-sm py-6 sm:w-full md:w-1/2">
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3"
                        href="http://">Add user</a></li>
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3"
                        href="http://">Roles</a></li>
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3"
                        href="http://">Groups</a></li>
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3"
                        href="{{ route('user-manager.bulk.index') }}">Bulk actions</a></li>
            </ul>
        </div>
    </nav>

    <section class="container mx-auto my-6">
        @if (session('status'))
        <div class="alert alert-success">
            <p>{{ session('status') }}</p>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @yield('content')
    </section>
    @endsection

    @push('scripts')
    <livewire:scripts>
    @endpush
