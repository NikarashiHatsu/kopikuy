<div>
    <div class="bg-white p-4 mb-4 rounded prose-headings:mt-0 prose-headings:uppercase prose-p:mb-0 prose-img:my-0 prose-img:py-0">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img
                    src="{{ $menu['image'] ?? "" }}"
                    class="w-24 h-24 bg-gray-300 rounded object-cover"
                />
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
