<div class="w-full min-h-[800px]">
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
                    There is all about<br />
                    {{ config('app.name') }}
                </h1>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                    ullam deleniti, nesciunt explicabo pariatur quasi eum dignissimos
                    modi totam quae voluptatibus, esse repellendus numquam! Enim eos
                    corporis qui molestias vitae.
                </p>

                <h3 class="flex items-center font-display font-light uppercase">
                    <span>
                        <x-phosphor-check-square class="w-6 h-6 mr-2" />
                    </span>
                    <span>
                        Lorem, ipsum dolor sit amet.
                    </span>
                </h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
                    voluptatibus praesentium inventore quaerat officiis veniam maxime.
                </p>

                <h3 class="flex items-center font-display font-light uppercase">
                    <span>
                        <x-phosphor-check-square class="w-6 h-6 mr-2" />
                    </span>
                    <span>
                        Lorem, ipsum dolor sit amet.
                    </span>
                </h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis
                    blanditiis quibusdam, quas distinctio recusandae maxime nostrum eius
                    aut minus nulla sed ipsum doloribus eos beatae necessitatibus!
                </p>

                <div class="flex flex-col-reverse sm:flex-row items-center">
                    <button class="transition duration-300 ease-in-out bg-amber-600 hover:bg-amber-700 rounded text-white inline px-5 py-3 uppercase font-bold w-52">
                        Learn More
                    </button>

                    <div class="flex items-center ml-0 sm:ml-16">
                        <img
                            class="w-16 h-16 rounded-full"
                            src="{{ asset('img/240992716_584676879568706_8566206807420594897_n.jpeg') }}"
                        />

                        <div class="flex flex-col ml-4 leading-normal">
                            <span class="font-semibold">Name of Founder</span>
                            <span class="text-amber-600">Founder & CEO</span>
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
