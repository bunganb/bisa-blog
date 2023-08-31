<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>{{ Route::currentRouteName() }} - BisaBlog</title>
    <!-- Generics -->
    <link href="{{asset('assets/images/favicon/favicon-32.png')}}" rel="icon" sizes="32x32">
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

            <!-- Apps -->
            <div class="dropdown self-stretch">
                <button
                    class="la la-box flex h-full items-center px-2 text-2xl leading-none ltr:ml-4 rtl:mr-4 lg:ltr:ml-1 lg:rtl:mr-1"
                    data-tippy-arrow="true" data-tippy-placement="bottom" data-toggle="custom-dropdown-menu">
                </button>
                <div class="custom-dropdown-menu p-5 text-center">
                    <div class="flex justify-around">
                        <a class="text-normal hover:text-primary p-5" href="#no-link">
                            <span class="la la-cog block text-5xl leading-none"></span>
                            <span>Settings</span>
                        </a>
                        <a class="text-normal hover:text-primary p-5" href="#no-link">
                            <span class="la la-users block text-5xl leading-none"></span>
                            <span>Users</span>
                        </a>
                    </div>
                    <div class="flex justify-around">
                        <a class="text-normal hover:text-primary p-5" href="#no-link">
                            <span class="la la-book block text-5xl leading-none"></span>
                            <span>Docs</span>
                        </a>
                        <a class="text-normal hover:text-primary p-5" href="#no-link">
                            <span class="la la-dollar block text-5xl leading-none"></span>
                            <span>Shop</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Notifications -->
            <div class="dropdown self-stretch">
                <button
                    class="la la-bell relative flex h-full items-center px-2 text-2xl leading-none ltr:ml-1 rtl:mr-1"
                    data-tippy-arrow="true" data-tippy-placement="bottom-end" data-toggle="custom-dropdown-menu">
                    <span
                        class="border-primary font-body text-primary absolute right-0 top-0 -mr-1 -mt-1 rounded-full border px-2 text-xs leading-tight">3</span>
                </button>
                <div class="custom-dropdown-menu">
                    <div class="flex items-center px-5 py-2">
                        <h5 class="mb-0 uppercase">Notifications</h5>
                        <button class="btn btn_outlined btn_warning uppercase ltr:ml-auto rtl:mr-auto">Clear
                            All</button>
                    </div>
                    <hr>
                    <div class="hover:bg-primary p-5 hover:bg-opacity-5">
                        <a href="#no-link">
                            <h6 class="uppercase">Heading One</h6>
                        </a>
                        <p>Lorem ipsum dolor, sit amet consectetur.</p>
                        <small>Today</small>
                    </div>
                    <hr>
                    <div class="hover:bg-primary p-5 hover:bg-opacity-5">
                        <a href="#no-link">
                            <h6 class="uppercase">Heading Two</h6>
                        </a>
                        <p>Mollitia sequi dolor architecto aut deserunt.</p>
                        <small>Yesterday</small>
                    </div>
                    <hr>
                    <div class="hover:bg-primary p-5 hover:bg-opacity-5">
                        <a href="#no-link">
                            <h6 class="uppercase">Heading Three</h6>
                        </a>
                        <p>Nobis reprehenderit sed quos deserunt</p>
                        <small>Last Week</small>
                    </div>
                </div>
            </div>

            <!-- User Menu -->
            <div class="dropdown">
                <button class="flex items-center ltr:ml-4 rtl:mr-4" data-tippy-arrow="true"
                    data-tippy-placement="bottom-end" data-toggle="custom-dropdown-menu">
                    <span class="avatar">JD</span>
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
            <a class="link" data-tippy-content="Dashboard" data-toggle="tooltip-menu" href="/">
                <span class="icon la la-laptop"></span>
                <span class="title">Dashboard</span>
            </a>
            <a class="link" data-tippy-content="Blank Page" data-toggle="tooltip-menu" href="/posts">
                <span class="icon la la-newspaper"></span>
                <span class="title">Blog Posts</span>
            </a>
        </div>
        <!-- UI -->
        <div class="menu-detail" data-menu="ui">
            <div class="menu-detail-wrapper">
                <h6 class="uppercase">Form</h6>
                <a href="form-components.html">
                    <span class="la la-cubes"></span>
                    Components
                </a>
                <a href="form-input-groups.html">
                    <span class="la la-stop"></span>
                    Input Groups
                </a>
                <a href="form-layout.html">
                    <span class="la la-th-large"></span>
                    Layout
                </a>
                <a href="form-validations.html">
                    <span class="la la-check-circle"></span>
                    Validations
                </a>
                <a href="form-wizards.html">
                    <span class="la la-hand-pointer"></span>
                    Wizards
                </a>
                <hr>
                <h6 class="uppercase">Components</h6>
                <a href="components-alerts.html">
                    <span class="la la-bell"></span>
                    Alerts
                </a>
                <a href="components-avatars.html">
                    <span class="la la-user-circle"></span>
                    Avatars
                </a>
                <a href="components-badges.html">
                    <span class="la la-certificate"></span>
                    Badges
                </a>
                <a href="components-buttons.html">
                    <span class="la la-play"></span>
                    Buttons
                </a>
                <a href="components-cards.html">
                    <span class="la la-layer-group"></span>
                    Cards
                </a>
                <a href="components-collapse.html">
                    <span class="la la-arrow-circle-right"></span>
                    Collapse
                </a>
                <a href="components-colors.html">
                    <span class="la la-palette"></span>
                    Colors
                </a>
                <a href="components-dropdowns.html">
                    <span class="la la-arrow-circle-down"></span>
                    Dropdowns
                </a>
                <a href="components-modal.html">
                    <span class="la la-times-circle"></span>
                    Modal
                </a>
                <a href="components-popovers-tooltips.html">
                    <span class="la la-thumbtack"></span>
                    Popovers & Tooltips
                </a>
                <a href="components-tabs.html">
                    <span class="la la-columns"></span>
                    Tabs
                </a>
                <a href="components-tables.html">
                    <span class="la la-table"></span>
                    Tables
                </a>
                <a href="components-toasts.html">
                    <span class="la la-bell"></span>
                    Toasts
                </a>
                <hr>
                <h6 class="uppercase">Extras</h6>
                <a href="extras-carousel.html">
                    <span class="la la-images"></span>
                    Carousel
                </a>
                <a href="extras-charts.html">
                    <span class="la la-chart-area"></span>
                    Charts
                </a>
                <a href="extras-editors.html">
                    <span class="la la-keyboard"></span>
                    Editors
                </a>
                <a href="extras-sortable.html">
                    <span class="la la-sort"></span>
                    Sortable
                </a>
            </div>
        </div>

        <!-- Pages -->
        <div class="menu-detail" data-menu="pages">
            <div class="menu-detail-wrapper">
                <h6 class="uppercase">Authentication</h6>
                <a href="auth-login.html">
                    <span class="la la-user"></span>
                    Login
                </a>
                <a href="auth-forgot-password.html">
                    <span class="la la-user-lock"></span>
                    Forgot Password
                </a>
                <a href="auth-register.html">
                    <span class="la la-user-plus"></span>
                    Register
                </a>
                <hr>
                <h6 class="uppercase">Blog</h6>
                <a href="blog-list.html">
                    <span class="la la-list"></span>
                    List
                </a>
                <a href="blog-list-card-rows.html">
                    <span class="la la-list"></span>
                    List - Card Rows
                </a>
                <a href="blog-list-card-columns.html">
                    <span class="la la-list"></span>
                    List - Card Columns
                </a>
                <a href="blog-add.html">
                    <span class="la la-layer-group"></span>
                    Add Post
                </a>
                <hr>
                <h6 class="uppercase">Errors</h6>
                <a href="errors-403.html" target="_blank">
                    <span class="la la-exclamation-circle"></span>
                    403 Error
                </a>
                <a href="errors-404.html" target="_blank">
                    <span class="la la-exclamation-circle"></span>
                    404 Error
                </a>
                <a href="errors-500.html" target="_blank">
                    <span class="la la-exclamation-circle"></span>
                    500 Error
                </a>
                <a href="errors-under-maintenance.html" target="_blank">
                    <span class="la la-exclamation-circle"></span>
                    Under Maintenance
                </a>
                <hr>
                <a href="pages-pricing.html">
                    <span class="la la-dollar"></span>
                    Pricing
                </a>
                <a href="pages-faqs-layout-1.html">
                    <span class="la la-question-circle"></span>
                    FAQs - Layout 1
                </a>
                <a href="pages-faqs-layout-2.html">
                    <span class="la la-question-circle"></span>
                    FAQs - Layout 2
                </a>
                <a href="pages-invoice.html">
                    <span class="la la-file-invoice-dollar"></span>
                    Invoice
                </a>
            </div>
        </div>

        <!-- Applications -->
        <div class="menu-detail" data-menu="applications">
            <div class="menu-detail-wrapper">
                <a href="applications-media-library.html">
                    <span class="la la-image"></span>
                    Media Library
                </a>
                <a href="applications-point-of-sale.html">
                    <span class="la la-shopping-bag"></span>
                    Point Of Sale
                </a>
                <a href="applications-to-do.html">
                    <span class="la la-check-circle"></span>
                    To Do
                </a>
                <a href="applications-chat.html">
                    <span class="la la-comment"></span>
                    Chat
                </a>
            </div>
        </div>

        <!-- Menu -->
        <div class="menu-detail" data-menu="menu">
            <div class="menu-detail-wrapper">
                <a href="#no-link">
                    <span class="la la-cube"></span>
                    Default
                </a>
                <a href="#no-link">
                    <span class="la la-file-alt"></span>
                    Content
                </a>
                <a href="#no-link">
                    <span class="la la-shopping-bag"></span>
                    Ecommerce
                </a>
                <hr>
                <a href="#no-link">
                    <span class="la la-layer-group"></span>
                    Main Level
                </a>
                <a href="#no-link">
                    <span class="la la-arrow-circle-right"></span>
                    Grand Parent
                </a>
                <button class="collapse-header active" data-target="#menuGrandParentOpen" data-toggle="collapse">
                    <span class="collapse-indicator la la-arrow-circle-down"></span>
                    Grand Parent Open
                </button>
                <div class="open collapse" id="menuGrandParentOpen">
                    <a href="#no-link">
                        <span class="la la-layer-group"></span>
                        Sub Level
                    </a>
                    <a href="#no-link">
                        <span class="la la-arrow-circle-right"></span>
                        Parent
                    </a>
                    <button class="collapse-header active" data-target="#menuParentOpen" data-toggle="collapse">
                        <span class="collapse-indicator la la-arrow-circle-down"></span>
                        Parent Open
                    </button>
                    <div class="open collapse" id="menuParentOpen">
                        <a href="#no-link">
                            <span class="la la-layer-group"></span>
                            Sub Level
                        </a>
                    </div>
                </div>
                <hr>
                <h6 class="uppercase">Menu Types</h6>
                <a data-toggle="menu-type" data-value="default" href="#no-link">
                    <span class="la la-hand-point-right"></span>
                    Default
                </a>
                <a data-toggle="menu-type" data-value="hidden" href="#no-link">
                    <span class="la la-hand-point-left"></span>
                    Hidden
                </a>
                <a data-toggle="menu-type" data-value="icon-only" href="#no-link">
                    <span class="la la-th-large"></span>
                    Icons Only
                </a>
                <a data-toggle="menu-type" data-value="wide" href="#no-link">
                    <span class="la la-arrows-alt-h"></span>
                    Wide
                </a>
            </div>
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
                        <li><a href="{{ route($routeName,$segments) }}">{{ $segment }}</a></li>
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



</body>
</html>
