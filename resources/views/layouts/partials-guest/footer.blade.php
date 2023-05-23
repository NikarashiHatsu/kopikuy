<div
    class="w-full"
    style="
        background:
            linear-gradient(0, #44403ccc, #0c0a09),
            url({{ asset('img/nathan-dumlao-6VhPY27jdps-unsplash.jpg') }}) no-repeat fixed;
        background-size: cover;"
>
    <div class="flex flex-col justify-center items-center max-w-6xl w-full mx-auto py-8 pt-24 px-6 min-h-[800px] text-white prose relative pb-24">
        <h1 class="font-display text-white uppercase text-center">
            Coffee build your<br/>
            fresh mind
        </h1>

        <form class="flex justify-center my-12">
            <div class="flex">
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    class="placeholder:text-neutral-100 bg-neutral-800 border-neutral-900 text-white focus:ring-neutral-800 focus:ring-1 focus:ring-offset-2 active:ring-neutral-800 focus:border-neutral-800 rounded-l px-5 py-3 w-64 md:w-96"
                >

                <button
                    class="transition duration-300 ease-in-out bg-amber-300 border border-amber-400 p-0 h-full text-amber-800 uppercase text-sm tracking-wide font-bold rounded-r px-5"
                >
                    Subscribe Now
                </button>
            </div>
        </form>

        <div class="grid grid-cols-12 grid-flow-row gap-0 md:gap-16 w-full prose-p:mb-2 prose-p:mt-2 prose-p:leading-normal">
            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                <h2>
                    <x-application-logo class="prose" />
                </h2>
                <p class="break-words">
                    {{ \App\Services\AppService::get_prop($about_us_short_description, 'Nama', 'AboutUsShortDescription') }}
                </p>
                <div>
                    Social medias
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                <h2 class="text-white font-display uppercase">Contact us</h2>
                <p>Address: {{ \App\Services\AppService::get_prop($kontak, 'Tipe', 'alamat') }}</p>
                <p>Email: {{ \App\Services\AppService::get_prop($kontak, 'Tipe', 'email') }}</p>
                <p>Phone: {{ \App\Services\AppService::get_prop($kontak, 'Tipe', 'kontak') }}</p>
            </div>

            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                <h2 class="text-white font-display uppercase">Opening hours</h2>

                @foreach ($jadwal as $j)
                    <x-open-time
                        :day="$j['Hari']"
                        :time="$j['Waktu']"
                        :holiday="$j['Libur']"
                    />
                @endforeach
            </div>

            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                <h2 class="text-white font-display uppercase">Recent News</h2>

                <div>
                    Blog post component
                </div>

                <div>
                    Blog post component
                </div>
            </div>
        </div>

        <div class="text-center absolute bottom-0 w-full border-t border-stone-500 pb-6 pt-5 px-6">
            In collab of <a class="transition duration-300 ease-in-out text-yellow-400 hover:text-yellow-600 no-underline" href="https://shiroyuki.dev">Aghits Nidallah</a>
            and <a class="transition duration-300 ease-in-out text-yellow-400 hover:text-yellow-600 no-underline" href="https://umc.ac.id">Fakultas Teknik UMC</a> &copy;2023.
        </div>
    </div>
</div>
