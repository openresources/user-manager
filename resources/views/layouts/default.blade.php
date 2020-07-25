@extends('user-manager::layouts.scaffold')


@section('page')


<div class="container mx-auto px-4">
        <header>
            <h1>@yield('title')</h1>
        </header>
        @yield('content')
    </div>
@endsection
