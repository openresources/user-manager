<div class="container mx-auto px-6 md:px-0">
    <div class="flex items-center justify-center">
        <div class="mr-6">
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                @hasSection ('logo')
                <div class="flex">
                    <img src="@yield('logo')" alt="{{ __('logo') }}" class="mr-4"> @if (config('app.show_branding'))
                    <span class="ml-5">{{ config('app.name', 'Laravel') }}</span> @endif
                </div>
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
                        <img class="h-8 bg-gray-300 object-cover rounded-full overflow-hidden border-1 border-gray-300 active:border-white focus:border-white mr-1"
                            src="{{Auth::user()->avatar? (Str::contains(Auth::user()->avatar, 'secure.gravatar.com')? Auth::user()->avatar : asset('vendor/resume/img/' . Auth::user()->avatar)) : asset('vendor/resume/img/users/default.svg') }}"
                            alt="{{ __('avatar') }}">
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
                                class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white">@lang('Dashboard')</a>
                        </li>
                        @endif

                        @stack('profile-menu')

                        <li>
                            <a href="{{ route('user.account.settings') }}"
                                class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white">@lang('Account
                                settings')</a>
                        </li>

                        @if (config('app.support_route'))
                        <li>
                            <a href="{{ config('app.support_route') }}"
                                class="block px-4 py-2 text-gray-600 text-sm hover:bg-indigo-500 hover:text-white">@lang('Support')</a>
                        </li>
                        @endif

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
