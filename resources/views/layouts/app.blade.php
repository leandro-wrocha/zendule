<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            {{ $title ?? '---' }}
        </title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

    <body
        x-data="
            { 
                page: 'ecommerce', 
                loaded: true, 
                darkMode: false, 
                stickyMenu: false, 
                sidebarToggle: false, 
                scrollTop: false,
                setPage(pageName) {
                    this.page = pageName;
                },
                copyToClipboard(text) {
                    navigator.clipboard.writeText(text).then(() => {
                        alert(text + ' copied to clipboard!');
                    }, () => {
                        alert('Failed to copy text to clipboard.');
                    });
                }
            }
        "
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))
        "
        :class="{'dark bg-gray-900': darkMode === true}"
    >
        <!-- ===== Preloader Start ===== -->
            @include('partials.preloader')
        <!-- ===== Preloader End ===== -->
        
        @yield('content')
    </body>
</html>