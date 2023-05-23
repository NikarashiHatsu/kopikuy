<div class="min-h-[800px] bg-stone-900">
    <div class="max-w-screen-2xl mx-auto w-full">
        <div class="w-full h-full 2xl:mx-auto 2xl:py-16 relative prose prose-img:m-0 prose-headings:m-0 max-w-none">
            <img
                src="{{ asset('img/sliders/nathan-dumlao-3nn7OOHqnc4-unsplash.jpg') }}"
                class="w-full h-full 2xl:rounded-xl brightness-50"
            />

            <div class="w-full absolute top-1/4 px-16 max-w-prose">
                <h1 class="font-display font-light uppercase text-white leading-tight text-5xl">
                    {{ \App\Services\AppService::get_prop($props, 'Nama', 'HeroTitle') }}
                </h1>

                <p class="text-white">
                    {{ \App\Services\AppService::get_prop($props, 'Nama', 'HeroDescription') }}
                </p>

                <div class="flex">
                    <a
                        href="{{ \App\Services\AppService::get_prop($props, 'Nama', 'HeroPrimaryAction') }}"
                        class="transition duration-300 no-underline ease-in-out flex items-center justify-center px-3 py-3 w-52 bg-amber-600 hover:bg-amber-700 text-white uppercase font-bold rounded"
                    >
                        {{ \App\Services\AppService::get_prop($props, 'Nama', 'HeroPrimaryButton') }}
                    </a>

                    <a
                        href="{{ \App\Services\AppService::get_prop($props, 'Nama', 'HeroSecondaryAction') }}"
                        class="transition duration-300 no-underline ease-in-out flex items-center justify-center px-3 py-3 w-52 bg-transparent hover:bg-white text-white hover:text-gray-700 uppercase font-bold rounded border-2 border-white ml-4"
                    >
                        {{ \App\Services\AppService::get_prop($props, 'Nama', 'HeroSecondaryButton') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
