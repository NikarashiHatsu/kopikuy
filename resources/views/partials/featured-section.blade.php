<div class="w-full min-h-screen">
    <div class="grid grid-cols-9 grid-rows-2 min-h-screen">
        <div
            class="col-span-9 lg:col-span-3 row-span-2 bg-zinc-100 flex items-center justify-center"
            style="
                background:
                    linear-gradient(0, #1c191788, #1c191788),
                    url({{ asset('img/nathan-dumlao-Y3AqmbmtLQI-unsplash.jpg') }}) no-repeat;
                background-size: cover;"
        >
            <button class="flex flex-col items-center text-white">
                <x-phosphor-play-circle-thin class="inline w-24 h-24 text-white" />
                <span class="mt-2">
                    Play Video
                </span>
            </button>
        </div>

        <div class="col-span-9 lg:col-span-6 row-span-1 px-8 py-4 bg-zinc-50 prose max-w-none prose-p:mt-0">
            <div class="flex">
                <div class="w-1/2 flex-shrink-0">
                    <h4 class="font-display uppercase flex items-center mb-6">
                        <x-phosphor-coffee class="w-8 h-8 inline mr-4" /> Client Testimonial
                    </h4>

                    <h1 class="font-display uppercase">
                        Divine Aroma in<br/>
                        every single cup
                    </h1>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic velit maiores necessitatibus. Magnam laboriosam minus, eligendi et perferendis, aperiam error, quia pariatur vitae alias similique dignissimos odit tempora repudiandae eum.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus eveniet suscipit, vero facilis earum odit esse nesciunt illum. Accusantium nobis laudantium iste laborum similique vero quis eligendi consequuntur assumenda debitis?
                    </p>
                </div>

                <div class="flex items-center justify-center w-full">
                    <img
                        src="{{ asset('img/niklas-ohlrogge-b3ScDwnkpfc-unsplash.png') }}"
                        alt="coffee"
                        class="w-80 h-80"
                    >
                </div>
            </div>
        </div>

        <div class="col-span-9 sm:col-span-6 lg:col-span-2 px-6 py-10 prose bg-stone-200">
            <h2 class="font-display uppercase flex items-center">
                Reservation...<x-phosphor-squares-four class="w-8 h-8 inline ml-4" />
            </h2>

            <x-contact
                :contact1="[
                    'href' => 'tel:+6285155332844',
                    'text' => '+62-851-5533-2844 (Aghits)',
                ]"
                :contact2="[
                    'href' => 'tel:+6285155332844',
                    'text' => '+62-851-5533-2844 (Dian)',
                ]"
            >
                <x-slot:icon>
                    <x-phosphor-phone-fill class="w-6 h-6 text-amber-400" />
                </x-slot:icon>
            </x-contact>

            <x-contact
                :contact1="[
                    'href' => 'mailto:yourlovelydev@gmail.com',
                    'text' => 'yourlovelydev@gmail.com (Aghits)',
                ]"
                :contact2="[
                    'href' => 'mailto:dian@umc.ac.id',
                    'text' => 'dian@umc.ac.id (Dian)',
                ]"
            >
                <x-slot:icon>
                    <x-phosphor-envelope-fill class="w-6 h-6 text-amber-400" />
                </x-slot:icon>
            </x-contact>

            <x-contact
                :contact1="[
                    'href' => 'javascript:void(0)',
                    'text' => 'Gg. Sijarak Jl. Kp. Melati No.7a, Kesambi, Kec. Kesambi, Kota Cirebon, Jawa Barat 45134',
                ]"
            >
                <x-slot:icon>
                    <x-phosphor-buildings-fill class="w-6 h-6 text-amber-400" />
                </x-slot:icon>
            </x-contact>
        </div>

        <div
            class="col-span-9 sm:col-span-6 lg:col-span-2 px-6 py-10 text-white prose leading-tight"
            style="
                background:
                    linear-gradient(0, #44403cbb, #0c0a09ee),
                    url({{ asset('img/clifford-VobvKmG-StA-unsplash.jpg') }}) no-repeat;
                background-size: contain;"
        >
            <h2 class="font-display uppercase text-white flex items-center">
                Opening Hours...<x-phosphor-clock class="w-8 h-8 inline ml-4" />
            </h2>

            <x-open-time day="Monday" time="09:00 - 21:00" holiday="true" />
            <x-open-time day="Tuesday" time="09:00 - 21:00" />
            <x-open-time day="Wednesday" time="09:00 - 21:00" />
            <x-open-time day="Thursday" time="09:00 - 21:00" />
            <x-open-time day="Friday" time="09:00 - 21:00" />
            <x-open-time day="Saturday" time="09:00 - 21:00" />
            <x-open-time day="Sunday" time="09:00 - 21:00" />
        </div>

        <div class="col-span-9 sm:col-span-6 lg:col-span-2 px-6 py-10 prose bg-stone-200 relative">
            <h2 class="font-display uppercase flex justify-center mb-16">
                20% Offers...<x-phosphor-tag class="w-8 h-8 inline ml-4" />
            </h2>

            <img
                src="{{ asset('img/amr-taha-oGDncP68cw4-unsplash.png') }}"
                alt=""
                class="relative w-2/3 mx-auto"
            />
        </div>
    </div>
</div>
