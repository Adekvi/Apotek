<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <x-primer.part.css />
    @stack('css')

</head>

<body>
    <div id="app">

        <x-primer.part.sidebar />

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            {{ $slot }}

            <x-primer.part.footer />

        </div>
    </div>

    @stack('js')
    <x-primer.part.js />

</body>

</html>
