<div class="py-12 bg-stone-100">
    <div class="max-w-6xl w-full mx-auto px-6">
        <div class="grid grid-cols-12 grid-flow-row gap-16">
            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 prose prose-p:leading-normal prose-p:mt-0 prose-p:mb-2">
                <x-service
                    :index="1"
                    :title="'Awesome Aroma'"
                    :description="'Lorem ipsum dolor sit amet consectetur adipisicing elit.'"
                >
                    <x-slot:icon>
                        <x-phosphor-coffee-thin class="w-6 h-6" />
                    </x-slot:icon>
                </x-service>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 prose prose-p:leading-normal prose-p:mt-0 prose-p:mb-2">
                <x-service
                    :index="2"
                    :title="'High Quality'"
                    :description="'Lorem ipsum dolor sit amet consectetur adipisicing elit.'"
                >
                    <x-slot:icon>
                        <x-phosphor-medal-thin class="w-6 h-6" />
                    </x-slot:icon>
                </x-service>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 prose prose-p:leading-normal prose-p:mt-0 prose-p:mb-2">
                <x-service
                    :index="3"
                    :title="'Pure Grade'"
                    :description="'Lorem ipsum dolor sit amet consectetur adipisicing elit.'"
                >
                    <x-slot:icon>
                        <x-phosphor-drop-thin class="w-6 h-6" />
                    </x-slot:icon>
                </x-service>
            </div>

            <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3 prose prose-p:leading-normal prose-p:mt-0 prose-p:mb-2">
                <x-service
                    :index="4"
                    :title="'Proper Roasting'"
                    :description="'Lorem ipsum dolor sit amet consectetur adipisicing elit.'"
                >
                    <x-slot:icon>
                        <x-phosphor-handbag-thin class="w-6 h-6" />
                    </x-slot:icon>
                </x-service>
            </div>
        </div>
    </div>
</div>
