<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Second Chapter')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        paper: '#ffffff',
                        ink: '#241c17',
                        leather: '#7b4b2a',
                        muted: '#6b5f55',
                        line: '#e8ded2',
                    },
                    fontFamily: {
                        serif: ['Georgia', 'Cambria', 'Times New Roman', 'serif'],
                    },
                },
            },
        };
    </script>
</head>
<body class="flex min-h-screen flex-col bg-paper text-ink antialiased">

    @php
        $diHalamanLogin = request()->is('/');
        $navUsername = request()->query('username');
    @endphp

    {{-- menu dan footer cuma muncul kalau sudah lewat login --}}
    @unless ($diHalamanLogin)
        <x-navbar :username="$navUsername" />
    @endunless

    <main class="mx-auto w-full max-w-5xl flex-1 px-5 py-10 md:py-14">
        @yield('content')
    </main>

    @unless ($diHalamanLogin)
        <x-footer />
    @endunless

</body>
</html>
