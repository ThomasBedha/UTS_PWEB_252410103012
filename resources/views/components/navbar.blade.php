@props(['username' => null])

<header class="border-b-2 border-leather/20 bg-white">
    <div class="mx-auto flex w-full max-w-5xl flex-col gap-4 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">

        <a href="{{ url('/dashboard' . ($username ? '?username=' . urlencode($username) : '')) }}" class="leading-tight">
            <span class="block font-serif text-xl font-bold text-leather">Second Chapter</span>
            <span class="block text-xs text-muted">Every Book Deserves Another Story</span>
        </a>

        <nav class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm">
            <a href="{{ url('/dashboard' . ($username ? '?username=' . urlencode($username) : '')) }}"
               class="text-ink underline decoration-line decoration-2 underline-offset-4 hover:decoration-leather focus:outline-none focus:ring-2 focus:ring-leather focus:ring-offset-2 focus:ring-offset-paper">
                Dashboard
            </a>
            <a href="{{ url('/pengelolaan' . ($username ? '?username=' . urlencode($username) : '')) }}"
               class="text-ink underline decoration-line decoration-2 underline-offset-4 hover:decoration-leather focus:outline-none focus:ring-2 focus:ring-leather focus:ring-offset-2 focus:ring-offset-paper">
                Pengelolaan
            </a>
            <a href="{{ url('/profile' . ($username ? '?username=' . urlencode($username) : '')) }}"
               class="text-ink underline decoration-line decoration-2 underline-offset-4 hover:decoration-leather focus:outline-none focus:ring-2 focus:ring-leather focus:ring-offset-2 focus:ring-offset-paper">
                Profil
            </a>

            @if ($username)
                <span class="hidden text-muted sm:inline">|</span>
                <span class="text-muted">{{ $username }}</span>
            @endif
        </nav>

    </div>
</header>
