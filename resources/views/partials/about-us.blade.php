<div class="w-full min-h-[800px] bg-white">
    <div class="flex flex-col md:flex-row items-center justify-center max-w-6xl mx-auto w-full">
        <div class="flex flex-shrink-0 w-full md:w-8/12 px-6 md:pl-6 py-0 md:py-8 pb-8 md:pb-0 pr-0 md:pr-8 prose-sm md:prose">
            <div class="prose-p:leading-normal">
                <h3 class="flex items-center font-display font-light uppercase">
                    <span>
                        <x-phosphor-coffee-bold class="w-6 h-6 mr-4" />
                    </span>
                    <span>
                        About Us
                    </span>
                </h3>

                <h1 class="font-display font-light uppercase">
                    {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsTitle') }}
                </h1>

                <p>
                    {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsDescription') }}
                </p>

                <h3 class="flex items-center font-display font-light uppercase">
                    <span>
                        <x-phosphor-check-square class="w-6 h-6 mr-2" />
                    </span>
                    <span>
                        {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsFeat1Title') }}
                    </span>
                </h3>

                <p>
                    {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsFeat1Description') }}
                </p>

                <h3 class="flex items-center font-display font-light uppercase">
                    <span>
                        <x-phosphor-check-square class="w-6 h-6 mr-2" />
                    </span>
                    <span>
                        {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsFeat2Title') }}
                    </span>
                </h3>

                <p>
                    {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsFeat2Description') }}
                </p>

                <div class="flex flex-col-reverse sm:flex-row items-center">
                    <a
                        href="{{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsPrimaryButtonAction') }}"
                        class="transition duration-300 ease-in-out bg-amber-600 hover:bg-amber-700 rounded flex items-center justify-center !no-underline !text-white px-5 py-3 uppercase !font-bold w-52"
                    >
                        {{ \App\Services\AppService::get_prop($props, 'Nama', 'AboutUsPrimaryButtonDescription') }}
                    </a>

                    <div class="flex items-center ml-0 sm:ml-16">
                        <img
                            class="w-16 h-16 rounded-full"
                            src="{{ \App\Services\AppService::get_prop($props, 'Nama', 'SecretaryImage') }}"
                        />

                        <div class="flex flex-col ml-4 leading-normal">
                            <span class="font-semibold">{{ \App\Services\AppService::get_prop($props, 'Nama', 'SecretaryName') }}</span>
                            <span class="text-amber-600">{{ \App\Services\AppService::get_prop($props, 'Nama', 'SecretaryDescription') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full relative h-72 md:min-h-[800px]">
            <img
                src="{{ asset('img/nathan-dumlao-71u2fOofI-U-unsplash.jpg') }}"
                alt="Coffee"
                class="relative md:absolute md:top-0 h-full w-full object-cover"
            />
        </div>
    </div>
</div>
