<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from yeti.yetithemes.net/demo/errors-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 17:02:27 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>404 Error - Errors - BisaBlog</title>

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
</head>

<body>

    <!-- Customizer -->
    <aside class="sidebar sidebar_customizer" id="customizer">

        <!-- Togglers -->
        <div class="toggler-wrapper">
            <div>
                <button class="toggler" data-toggle="customizer">
                    <span class="la la-gear animate-spin-slow"></span>
                </button>
                <button class="randomizer mt-2" data-toggle="randomizer">
                    <span class="la la-random"></span>
                </button>
            </div>
        </div>

        <!-- Theme Customizer -->
        <div class="flex h-20 items-center justify-between p-4">
            <div>
                <h2>Theme Customizer</h2>
                <p>Customize & Preview</p>
            </div>
            <button class="close hover:text-primary la la-times text-2xl leading-none"
                data-toggle="customizer"></button>
        </div>
        <hr>
        <div class="overflow-y-auto">
            <div class="flex items-center justify-between p-4">
                <h5>Dark Mode</h5>
                <label class="switch switch_outlined">
                    <input data-toggle="dark-mode" type="checkbox">
                    <span></span>
                </label>
            </div>
            <hr>
            <div class="flex items-center justify-between p-4">
                <h5>RTL</h5>
                <label class="switch switch_outlined">
                    <input data-toggle="rtl" type="checkbox">
                    <span></span>
                </label>
            </div>
            <hr>
            <div class="flex items-center justify-between p-4">
                <div>
                    <h5>Branded Menu</h5>
                    <small>Menu will be set to primary color</small>
                </div>
                <label class="switch switch_outlined">
                    <input data-toggle="branded-menu" type="checkbox">
                    <span></span>
                </label>
            </div>
            <hr>
            <div class="p-4">
                <h5>Menu Types</h5>
                <div class="mt-5 flex flex-col space-y-2" id="customizerMenuTypes"></div>
            </div>
            <hr>
            <div class="p-4">
                <h5>Themes</h5>
                <div class="themes" id="customizerThemes"></div>
            </div>
            <hr>
            <div class="p-4">
                <div>
                    <h5>50 Shades of Gray</h5>
                    <small>5 x 10 Shades</small>
                </div>
                <div class="themes" id="customizerGrays"></div>
            </div>
            <hr>
            <div class="p-4">
                <h5>Fonts</h5>
                <div class="themes fonts" id="customizerFonts"></div>
            </div>
        </div>
    </aside>

    <!-- Top Bar -->
    <section class="top-bar">

        <!-- Brand -->
        <span class="brand">BisaBlog.</span>
    </section>

    <div class="container mt-20 flex items-center justify-center py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            <div class="mx-5 text-center uppercase md:mx-10">
                <h1 class="text-9xl font-bold">404</h1>
                <h2 class="text-primary mt-5">Page Not Found</h2>
                <h5 class="mt-2">The page you are looking for is not found.</h5>
                <a class="btn btn_primary mt-5" href="/">Go Back</a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>


<!-- Mirrored from yeti.yetithemes.net/demo/errors-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 17:02:27 GMT -->

</html>
