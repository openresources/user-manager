@extends('user-manager::layouts.scaffold')

@push('styles')
<livewire:styles>
    @endpush

    @section('page')
    <nav class="menu-bar" role="menubar">
        <div class="container mx-auto">
            <ul class="flex items-center justify-between text-sm py-6 sm:w-full md:w-1/2">
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3" href="http://">Add user</a></li>
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3" href="http://">Roles</a></li>
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3" href="http://">Groups</a></li>
                <li class="flex-grow"><a class="block rounded text-center hover:text-white hover:bg-orange-700 p-3" href="{{ route('user-manager.bulk-actions.index') }}">Bulk actions</a></li>
            </ul>
        </div>
    </nav>

    <section class="container mx-auto my-6">
        @yield('content')
    </section>
    @endsection


    @push('scripts')
    <livewire:scripts>
    @endpush
