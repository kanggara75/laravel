<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
        <div class="mx-auto max-w-6xl sm:px-6 lg:px-8">
            <div class="mt-4 flex justify-center sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-2xl text-sky-500 sm:ml-0 sm:text-right">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} x Tailwind
                    CSS <?php $packageJSON = json_decode(file_get_contents(base_path() . '/package.json'));
                    $v = $packageJSON->devDependencies->tailwindcss;
                    $out = str_replace('^', 'v', $v);
                    echo $out; ?> (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
