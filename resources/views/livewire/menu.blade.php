<div>
    <div class="transition duration-100 ease-in group bg-white hover:shadow-xl cursor-pointer p-4 mb-4 rounded prose-headings:mt-0 prose-headings:uppercase prose-p:mb-0 prose-img:my-0 prose-img:py-0">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="w-24 h-24 rounded overflow-hidden">
                    <img
                        src="{{ $menu['image'] ?? "" }}"
                        class="transform-gpu duration-300 ease-in-out w-full h-full bg-gray-300 rounded object-cover group-hover:scale-125 group-hover:-rotate-12"
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
