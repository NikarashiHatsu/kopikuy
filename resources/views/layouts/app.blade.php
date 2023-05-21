<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body class="font-sans antialiased">
    <div class="drawer drawer-mobile">
        <input id="drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content bg-base-200 flex flex-col p-6">
            @include('layouts.partials-app.navbar')

            {{ $slot }}
        </div>
        <nav class="drawer-side">
            <label for="drawer" class="drawer-overlay"></label>
            @include('layouts.partials-app.sidebar')
        </nav>
    </div>

    {{ $modals ?? '' }}

    @livewireScripts()
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('success', (message) => {
                Swal.fire(
                    'Berhasil!',
                    message,
                    'success'
                );
            });

            Livewire.on('error', (message) => {
                Swal.fire(
                    'Terjadi kegagalan',
                    message,
                    'error'
                );
            });

            Livewire.on('delete', (message, callback) => {
                Swal.fire({
                    title: 'Hapus data ini?',
                    text: message,
                    icon: 'question',
                    showCancelButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        return callback();
                    }

                    return Swal.fire(
                        'Dibatalkan',
                        'Data tidak jadi dihapus',
                        'info'
                    );
                });
            });
        });
    </script>
</body>

</html>
