<footer
    class="w-full"
    style="
        background:
            linear-gradient(0, #44403ccc, #0c0a09),
            url({{ asset('img/nathan-dumlao-6VhPY27jdps-unsplash.jpg') }});"
>
    <div class="flex flex-col justify-center items-center max-w-6xl w-full mx-auto py-8 pt-24 px-6 min-h-screen text-white prose relative pb-24">
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aliquam minus accusantium porro sint beatae quam.
                </p>
                <div>
                    Social medias
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                <h2 class="text-white font-display uppercase">Contact us</h2>
                <p>Address: </p>
                <p>Email: </p>
                <p>Phone: </p>
            </div>

            <div class="col-span-12 md:col-span-6 xl:col-span-3">
                <h2 class="text-white font-display uppercase">Opening hours</h2>
                <x-open-time day="Monday" time="09:00 - 21:00" holiday="true" />
                <x-open-time day="Tuesday" time="09:00 - 21:00" />
                <x-open-time day="Wednesday" time="09:00 - 21:00" />
                <x-open-time day="Thursday" time="09:00 - 21:00" />
                <x-open-time day="Friday" time="09:00 - 21:00" />
                <x-open-time day="Saturday" time="09:00 - 21:00" />
                <x-open-time day="Sunday" time="09:00 - 21:00" />
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
</footer>
