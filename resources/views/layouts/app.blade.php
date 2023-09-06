<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>{{ Route::currentRouteName() }} - BisaBlog</title>
    <!-- Generics -->
    <link href="{{ asset('assets/images/favicon/favicon-32.png') }}" rel="icon" sizes="32x32">
    <link href="{{ asset('assets/images/favicon/favicon-128.png') }}" rel="icon" sizes="128x128">
    <link href="{{ asset('assets/images/favicon/favicon-192.png') }}" rel="icon" sizes="192x192">
    <!-- Android -->
    <link href="{{ asset('assets/images/favicon/favicon-196.png') }}" rel="shortcut icon" sizes="196x196">
    <!-- iOS -->
    <link href="{{ asset('assets/images/favicon/favicon-152.png') }}" rel="apple-touch-icon" sizes="152x152">
    <link href="{{ asset('assets/images/favicon/favicon-167.png') }}" rel="apple-touch-icon" sizes="167x167">
    <link href="{{ asset('assets/images/favicon/favicon-180.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body>
    @include('sweetalert::alert')
    <!-- Top Bar -->
    <header class="top-bar">

        <!-- Menu Toggler -->
        <button class="menu-toggler la la-bars" data-toggle="menu"></button>

        <!-- Brand -->
        <span class="brand">BisaBlog.</span>
        <!-- Right -->
        <div class="flex items-center ltr:ml-auto rtl:mr-auto">

            <!-- Dark Mode -->
            <label class="switch switch_outlined" data-tippy-content="Toggle Dark Mode" data-toggle="tooltip">
                <input id="darkModeToggler" type="checkbox">
                <span></span>
            </label>

            <!-- Fullscreen -->
            <button class="la la-expand-arrows-alt hidden px-2 text-2xl leading-none ltr:ml-3 rtl:mr-3 lg:inline-block"
                data-tippy-content="Fullscreen" data-toggle="tooltip" id="fullScreenToggler"></button>
            <!-- User Menu -->
            <div class="dropdown">
                <button class="flex items-center ltr:ml-4 rtl:mr-4" data-tippy-arrow="true"
                    data-tippy-placement="bottom-end" data-toggle="custom-dropdown-menu">
                    <span class="avatar">BN</span>
                </button>
                <div class="custom-dropdown-menu w-64">
                    <div class="p-5">
                        <h5 class="uppercase"></h5>
                        <p>Editor</p>
                    </div>
                    <hr>
                    <div class="p-5">
                        <a class="text-normal hover:text-primary flex items-center" href="#no-link">
                            <span class="la la-user-circle text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            View Profile
                        </a>
                        <a class="text-normal hover:text-primary mt-5 flex items-center" href="#no-link">
                            <span class="la la-key text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            Change Password
                        </a>
                    </div>
                    <hr>
                    <div class="p-5">
                        <a class="text-normal hover:text-primary flex items-center" href="#no-link">
                            <span class="la la-power-off text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu Bar -->
    <aside class="menu-bar menu-sticky menu-wide">
        <div class="menu-items">
            <div class="menu-header hidden">
                <a class="mx-8 mt-8 flex items-center" href="#">
                    <span class="avatar h-16 w-16">JD</span>
                    <div class="ltr:ml-4 ltr:text-left rtl:mr-4 rtl:text-right">
                        <h5>John Doe</h5>
                        <p class="mt-2">Editor</p>
                    </div>
                </a>
                <hr class="mx-8 my-4">
            </div>
            <a class="link" data-tippy-content="Dashboard" data-toggle="tooltip-menu"
                href="{{ route('Dashboard') }}">
                <span class="icon la la-laptop"></span>
                <span class="title">Dashboard</span>
            </a>
            <a class="link" data-tippy-content="Blank Page" data-toggle="tooltip-menu"
                href="{{ route('Posts') }}">
                <span class="icon la la-newspaper"></span>
                <span class="title">Blog Posts</span>
            </a>
        </div>
    </aside>

    <!-- Workspace -->
    <main class="workspace">

        <section class="breadcrumb {{ $__env->yieldContent('class') }}">
            <div>
                @php
                    $route = Route::currentRouteName();
                @endphp
                <h1>{{ $route }}</h1>
                <ul>
                    @if ($route != 'Dashboard')
                        <li><a href="{{ route('Dashboard') }}">Dashboard</a></li>
                        <li class="divider la la-arrow-right"></li>
                    @endif
                    @php
                        $segments = explode(' ', Route::currentRouteName());
                        $routeName = '';
                    @endphp
                    @foreach ($segments as $index => $segment)
                        @php
                            $routeName .= $segment;
                            $isLastSegment = $index === count($segments) - 1;
                        @endphp
                        {{-- route bug --}}
                        <li><a href="{{ route($routeName, $segments) }}">{{ $segment }}</a></li>
                        @unless ($isLastSegment)
                            <li class="divider la la-arrow-right"></li>
                        @endunless
                        @php
                            if (!$isLastSegment) {
                                $routeName .= ' ';
                            }
                        @endphp
                    @endforeach

                </ul>
            </div>
            @yield('lssa')
        </section>
        @yield('content')
        <!-- Footer -->
        <footer class="mt-auto">
            <div class="footer">
                <span class='uppercase'>&copy; 2023 BisaBlog</span>
                <nav>
                    <a href="mailto:Yeti Themes<info@yetithemes.net>?subject=Support">Support</a>
                    <span class="divider">|</span>
                    <a href="http://yeti.yetithemes.net/docs" rel="noreferrer" target="_blank">Docs</a>
                </nav>
            </div>
        </footer>

    </main>

    <!-- Scripts -->
    @yield('js')
    <script src="{{ asset('../assets/js/vendor.js') }}"></script>
    <script src="{{ asset('../assets/js/script.js
        ') }}"></script>
    <script>

    </script>
</body>

</html>
