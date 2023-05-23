<div class="w-full min-h-[800px]">
    <div class="grid grid-cols-6 xl:grid-cols-9 grid-rows-2 min-h-[800px]">
        <div
            class="col-span-6 xl:col-span-3 row-span-2 bg-zinc-100 flex items-center justify-center min-h-[32rem]"
            style="
                background:
                    linear-gradient(0, #1c191788, #1c191788),
                    url({{ asset('img/nathan-dumlao-Y3AqmbmtLQI-unsplash.jpg') }}) no-repeat;
                background-size: cover;"
        >
            <a
                href="{{ \App\Services\AppService::get_prop($props, 'Nama', 'TestimonialVideo') }}"
                class="flex flex-col items-center text-white"
            >
                <x-phosphor-play-circle-thin class="inline w-24 h-24 text-white" />
                <span class="mt-2">
                    Play Video
                </span>
            </a>
        </div>

        <div class="col-span-6 xl:col-span-6 row-span-1 px-8 py-4 bg-zinc-50 prose max-w-none prose-p:mt-0">
            <div class="flex flex-col sm:flex-row">
                <div class="w-full sm:w-1/2 flex-shrink-0">
                    <h4 class="font-display uppercase flex items-center mb-6">
                        <x-phosphor-coffee class="w-8 h-8 inline mr-4" /> Client Testimonial
                    </h4>

                    <h1 class="font-display uppercase">
                        {{ \App\Services\AppService::get_prop($props, 'Nama', 'TestimonialTitle') }}
                    </h1>

                    <p>
                        {!! \App\Services\AppService::get_prop($props, 'Nama', 'TestimonialDescription') !!}
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

        <div class="col-span-6 sm:col-span-3 xl:col-span-2 px-6 py-10 prose bg-stone-200 max-w-none">
            <h2 class="font-display uppercase flex items-center">
                Reservation...<x-phosphor-squares-four class="w-8 h-8 inline ml-4" />
            </h2>

            <x-contact
                :contact1="[
                    'href' => 'tel:+' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak')[0]['Value'],
                    'text' => \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak')[0]['Value'] . ' (' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak')[0]['Nama'] . ')',
                ]"
                :contact2="
                    ! empty(\App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak'))
                    ? [
                        'href' => 'tel:+' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak')[1]['Value'],
                        'text' => \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak')[1]['Value'] . ' (' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'kontak')[1]['Nama'] . ')',
                    ]
                    : []"
            >
                <x-slot:icon>
                    <x-phosphor-phone-fill class="w-6 h-6 text-amber-400" />
                </x-slot:icon>
            </x-contact>

            <x-contact
                :contact1="[
                    'href' => 'mailto:' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email')[0]['Value'],
                    'text' => \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email')[0]['Value'] . ' (' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email')[0]['Nama'] . ')',
                ]"
                :contact2="
                    ! empty(\App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email'))
                    ? [
                        'href' => 'mailto:' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email')[1]['Value'],
                        'text' => \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email')[1]['Value'] . ' (' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'email')[1]['Nama'] . ')',
                    ]
                    : []"
            >
                <x-slot:icon>
                    <x-phosphor-envelope-fill class="w-6 h-6 text-amber-400" />
                </x-slot:icon>
            </x-contact>

            <x-contact
                :contact1="[
                    'href' => 'javascript:void(0)',
                    'text' => \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'alamat')[0]['Value'] . ' (' . \App\Services\AppService::get_prop_values($reservation_contacts, 'Tipe', 'alamat')[0]['Value'] . ')',
                ]"
            >
                <x-slot:icon>
                    <x-phosphor-buildings-fill class="w-6 h-6 text-amber-400" />
                </x-slot:icon>
            </x-contact>
        </div>

        <div
            class="col-span-6 sm:col-span-3 xl:col-span-2 px-6 py-10 text-white prose leading-tight"
            style="
                background:
                    linear-gradient(0, #44403cbb, #0c0a09ee),
                    url({{ asset('img/clifford-VobvKmG-StA-unsplash.jpg') }}) no-repeat;
                background-size: cover;"
        >
            <h2 class="font-display uppercase text-white flex items-center">
                Opening Hours...<x-phosphor-clock class="w-8 h-8 inline ml-4" />
            </h2>

            @foreach ($jadwal as $j)
                <x-open-time
                    :day="$j['Hari']"
                    :time="$j['Waktu']"
                    :holiday="$j['Libur']"
                />
            @endforeach
        </div>

        <div class="col-span-6 xl:col-span-2 px-6 py-10 prose bg-stone-50 xl:bg-stone-200 relative max-w-none">
            <h2 class="font-display uppercase flex justify-center mb-16">
                20% Offers...<x-phosphor-tag class="w-8 h-8 inline ml-4" />
            </h2>

            <img
                src="{{ asset('img/amr-taha-oGDncP68cw4-unsplash.png') }}"
                alt=""
                class="relative w-2/3 mx-auto max-h-48 object-contain"
            />
        </div>
    </div>
</div>
