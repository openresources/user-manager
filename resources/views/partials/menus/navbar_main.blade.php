<div class="container mx-auto px-6 md:px-0">
    <div class="flex items-center justify-center">
        <div class="mr-6">
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                @hasSection ('logo')
                <img src="@yield('logo')" alt="{{ __('logo') }}">
                @else
                {{ config('app.name', 'Laravel') }}
                @endif
            </a>
        </div>
        <div class="flex items-center justify-end flex-1 text-right">
            @guest
            <ul class="h-8 flex items-center">
                <li>
                    <a class="no-underline hover:underline text-gray-300 text-sm p-3"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a class="no-underline hover:underline text-gray-300 text-sm p-3"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @stack('guest-links')
            </ul>
            @else
            <div x-data="{ open: false }">
                <div class="relative">
                    <button
                        class="flex items-center focus:outline-none focus:border-transparent text-gray-300 text-sm focus:text-white"
                        x-on:click="open = !open">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 object-cover rounded-full overflow-hidden border-2 border-gray-300 focus:border-white mr-1"
                            viewBox="0 0 473.935 473.935">
                            <circle cx="236.967" cy="236.967" r="236.967" fill="#5E7CE2" />
                            <path fill="#92B4F4"
                                d="M236.952 473.935c78.533 0 148.115-38.222 191.232-97.058-8.011-11.48-39.525-45.025-145.593-70.548 0-24.082-2.398-38.507-2.398-38.507s31.289-43.337 33.691-103.513c0-9.568 4.7-77.436-77.017-80.508V83.7c-.202 0-.382.045-.602.045-.21 0-.385-.045-.595-.045v.101c-81.702 3.068-77.017 70.941-77.017 80.505 2.398 60.175 33.691 103.513 33.691 103.513s-2.417 14.425-2.417 38.507C86.664 331.174 54.08 363.623 45.044 375.908c43.06 59.378 112.953 98.027 191.908 98.027z" />
                        </svg>
                        <span> {{ Auth::user()->name }}</span>
                    </button>

                    <ul class="absolute right-0 mt-2 pt-2 pb-4 w-48 bg-white rounded-lg shadow-xl" x-show="open"
                        x-on:click.away="open = false" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300" x-cloak>

                        @if ( filled(auth()->user()->role_id) &&
                        (auth()->user()->isAdmin || auth()->user()->role && auth()->user()->role->name == 'admin'))
                        <li>
                            <a href="{{ route(config('app.admin_dashboard')) }}"
                                class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white">Dashboard</a>
                        </li>
                        @else
                        {{-- <li>
                                    <a href="#"
                                            class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white">Support</a> 
                       </li> --}}
                        @endif
                        @stack('profile-menu')
                        <li>
                            <a href="{{ route('user.account.settings') }}"
                                class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white">Account
                                settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Sign out') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
            @endguest
        </div>
    </div>
</div>
