<div class="w-full h-screen flex flex-col gap-4 bg-white">
    <header class="flex items-center py-12 flex-col gap-4 w-full md:w-4/5 lg:w-3/6 mx-auto absolute top-0 left-0 right-0 bg-white">
        <img class="size-24" src="{{ config('app.institution_logo') }}" alt="{{ config('app.institution_name') }}" />
        <h1 class="font-primary text-3xl font-bold">{{ config('app.institution_name') }}</h1>
    </header>
    <main class="grid grid-rows-2 md:grid-rows-1 md:grid-cols-2 grow h-full [&>div]:pt-72 [&>div]:px-12">
        <div id="information" class="md:border-r order-2 md:-order-1">
            <section class="w-full md:w-4/5 mx-auto flex flex-col gap-y-8 justify-center pb-24 md:pb-0">
            {{-- Random Quote --}}
            <?php
                use \App\Models\Quote;
                $quote = Quote::inRandomOrder()->first();
            ?>
                <p class="text-lg italic">
                    {{ "$quote->quote" }}
                </p>
                <p class="font-medium text-xl self-end">{{ "- $quote->author" }}</p>
            </section>
            {{-- Random Quote --}}
        </div>
        <div id="login">
            <form wire:submit="login" class="space-y-8 w-full md:w-3/5">
                <legend class="font-bold text-3xl">Login</legend>
                @if(Session::has('errors'))
                    <p class="text-sm text-red-600 font-medium !-mb-6">
                        {{ Session::get('errors')->first('email') }}
                    </p>
                @endif
                <fieldset class="flex flex-col rounded-lg border [&>input]:border [&>input]:p-2 w-full">
                    <input type="email" wire:model="email" placeholder="Enter your student e-mail" required />
                    <input type="password" wire:model="password" placeholder="Enter your password" required />
                </fieldset>
                <div class="flex justify-between">
                    <label for="remember">
                        <input wire:model="remember" type="checkbox" name="remember" id="remember">
                        Remember me
                    </label>
                    <a class="font-semibold text-blue-600" href="/password">
                        Forgot your password?
                    </a>
                </div>
                <button class="rounded-lg bg-blue-600 hover:bg-blue-700 transition-colors ease-linear duration-300 text-white font-medium block py-2 w-full" type="submit">
                    Sign in
                    <span wire:loading>
                        <span class="iconify" data-icon="line-md:loading-twotone-loop"></span>
                    </span>
                </button>
            </form>
        </div>
    </main>
</div>