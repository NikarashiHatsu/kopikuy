<div class="w-full min-h-screen bg-stone-200 prose max-w-none py-8 pb-20">
    <div class="max-w-6xl px-8 mx-auto w-full">
        <h3 class="flex items-center justify-center font-display uppercase text-center font-amber-500">
            <span>
                <x-phosphor-coffee-bold class="w-6 h-6 mr-4" />
            </span>
            <span>
                Our Menus
            </span>
        </h3>

        <h1 class="text-center font-display uppercase font-light">
            {{ config('app.name') }}
        </h1>

        <div class="mt-4">
            <x-menu />
        </div>
    </div>
</div>
