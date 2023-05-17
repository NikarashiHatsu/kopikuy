<div class="relative mb-4 overflow-hidden group cursor-pointer">
    <div class="flex items-center justify-center transition-transform duration-300 ease-in-out w-full bg-amber-600 bg-opacity-80 z-10 h-full rounded absolute top-0 left-0 transform -translate-x-full hover group-hover:translate-x-0">
        <x-phosphor-shopping-cart-bold class="w-16 h-16 text-white" />
        <span class="font-display text-5xl text-light ml-6 text-white">
            Add to cart
        </span>
    </div>

    <div class="transition duration-100 ease-in bg-white hover:shadow-xl p-4 rounded prose-headings:mt-0 prose-headings:uppercase prose-p:mb-0 prose-img:my-0 prose-img:py-0">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-24 h-24 rounded overflow-hidden">
                    <img
                        src="{{ $menu['image'] ?? "" }}"
                        class="transform-gpu z-0 duration-300 ease-in-out w-full h-full bg-gray-300 rounded object-cover group-hover:scale-125 group-hover:-rotate-12"
                    />
                </div>
            </div>

            <div class="border-r px-4 mr-4">
                <h4 class="font-display font-light">
                    {{ $menu['name'] }}
                </h4>

                <p class="line-clamp-2">
                    {{ $menu['description'] }}
                </p>
            </div>

            <div class="flex-shrink-0 w-32 self-end">
                <span>
                    Rp
                </span>
                <span class="font-display font-light text-amber-600 text-5xl">
                    {{ number_format($menu['price'] / 1000, 0, '.', '.') }}k
                </span>
            </div>
        </div>
    </div>
</div>
