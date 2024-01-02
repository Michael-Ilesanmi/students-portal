<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.institution_short_name') . " Portal - $title" ?? config('app.institution_name') . " Portal" }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    </head>
    <body>
        <div x-on:toggle-side-nav="isSideMenuOpen = ! isSideMenuOpen" x-data="{ isSideMenuOpen: false}" :class=" {'overflow-hidden': isSideMenuOpen }"" class="relative h-screen bg-[#F9FAFB]">
            <nav 
                x-show="isSideMenuOpen" 
                x-transition:enter="transition ease-in-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-x-20"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in-out duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0 transform -translate-x-20"
                class="bg-[#7C7D7D] h-full absolute top-0 bottom-0 left-0 md:w-64 w-full"
            >
                <div @click.outside="$dispatch('toggle-side-nav')" class="h-full w-64">
                    <livewire:dashboard.nav.side />
                </div>
            </nav>
            <nav class="hidden md:block h-full absolute top-0 bottom-0 left-0 md:w-64 w-full">
                <livewire:dashboard.nav.side />
            </nav>
            <div class="w-full md:w-[calc(100%-256px)] grow flex flex-col ml-auto h-full overflow-y-clip">
                <livewire:dashboard.nav.top />
                <main class="p-6 overflow-y-auto grow">
                    {{-- Breadcrumb --}}
                    <nav class="flex gap-x-2 font-bold font-mono text-blue-500 capitalize tracking-wider mb-6">
                        <p>Home</p>
                        <p>/</p>
                        <p>{{ $title }}</p>
                    </nav>
                    {{-- Breadcrumb --}}
                    {{ $slot }}
                    {{-- Random Quote --}}
                    <?php
                        use \App\Models\Quote;
                        $quote = Quote::inRandomOrder()->first();
                    ?>
                    <p class="mt-6 mb-3 p-2 text-sm">
                        {{ "$quote->quote - $quote->author" }}
                    </p>
                    {{-- Random Quote --}}
                </main>
            </div>
        </div>
        <x-toaster-hub />
        <script>
        </script>
    </body>
</html>