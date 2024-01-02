<aside class="bg-[#fff] pt-11 h-full md:w-full w-64">
    {{-- Mobile Nav Version --}}
    <div class="block md:hidden pt-12">
        <div class="flex w-full pl-12">
            <img class="h-24 aspect-auto" src="{{ config('app.institution_logo') }}" alt="{{ config('app.institution_name') }}" />
        </div>
        <nav class="border-[#FFFFFF0F] mt-8 flex flex-col">
            @foreach ($sideNavBtns as $key => $btn)
            <a href=""  wire:key="{{ $key }}" class="{{ Route::currentRouteName() == $btn['name'] ? 'side-nav-active text-slate-800' : 'text-slate-500 hover:text-slate-800'  }} transition duration-500 ease-linear text-sm font-semibold w-full pl-8 py-4 border-blue-400 capitalize flex items-center gap-x-3">
                <span class="iconify text-xl" data-icon="{{ $btn['icon'] }}"></span>
                {{ $btn['text'] }}
            </a>
            @endforeach
        </nav>
    </div>
    {{-- MD/LG Nav Version --}}
    <div class='hidden md:block'>
        <div class="flex w-full pl-12">
            <img class="h-24 aspect-auto" src="{{ config('app.institution_logo') }}" alt="{{ config('app.institution_name') }}" />
        </div>
        <nav class="border-[#FFFFFF0F] mt-6 flex flex-col">
            @foreach ($sideNavBtns as $key => $btn)
            <a href="{{ $btn['route'] }}"  wire:key="{{ $key }}" class="{{ Route::currentRouteName() == $btn['name'] ? 'side-nav-active text-slate-800' : 'text-slate-500 hover:text-slate-800'  }} transition duration-500 ease-linear text-sm font-semibold w-full pl-6 py-4 border-blue-400 capitalize flex items-center gap-x-3">
                <span class="iconify text-xl" data-icon="{{ $btn['icon'] }}"></span>
                {{ $btn['text'] }}
            </a>
            @endforeach
        </nav>
    </div>
</aside>
