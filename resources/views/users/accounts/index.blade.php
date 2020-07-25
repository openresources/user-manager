@extends('user-manager::layouts.default')

@section('title', __('Account settings'))

@section('content')
    <div class="card card-default">
        
            <div class="bg-gray-100 mb-4 p-4 flex items-center justify-between">
                <div><span class="font-bold">Email:</span>: {{ auth()->user()->email }}</div>
                <div></div>
            </div>
            
            <div class="bg-gray-100 mb-4 p-4 flex items-center justify-between">
                <p><span class="font-bold">Password:</span> ******</p>
                <a href="{{ route('password.request') }}" class="btn btn-primary">Change Password</a>
            </div>
    </div>
@endsection
