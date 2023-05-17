<div class="w-full" x-data="{ activeMenu: 'all' }">
    <div class="max-w-lg mx-auto flex items-center justify-between uppercase">
        <a
            class="transition duration-300 ease-in-out text-sm uppercase no-underline px-5 py-2 rounded"
            href="javascript:void(0)"
            x-bind:class="{ 'font-black bg-amber-600 text-white': activeMenu === 'all' }"
            x-on:click="activeMenu = 'all'"
            x-transition
        >
            All
        </a>
        @foreach ($items as $item)
            <a
                class="transition duration-300 ease-in-out text-sm uppercase no-underline px-5 py-2 rounded"
                href="javascript:void(0)"
                x-bind:class="{ 'font-black bg-amber-600 text-white': activeMenu === '{{ $item['category'] }}' }"
                x-on:click="activeMenu = '{{ $item['category'] }}'"
                x-transition
            >
                {{ $item['category'] }}
            </a>
        @endforeach
    </div>

    <div class="max-w-4xl mx-auto border-t-4 border-stone-300 pt-4 mt-4">
        <div
            class="flex flex-col"
            x-cloak
            x-show="activeMenu === 'all'"
            x-transition
        >
            @foreach ($randomMenus as $menu)
                <livewire:menu :menu="$menu" />
            @endforeach
        </div>

        @foreach ($items as $item)
            <div
                class="flex flex-col"
                x-cloak
                x-show="activeMenu === '{{ $item['category'] }}'"
                x-transition
            >
                @foreach ($item['menus'] as $menu)
                    <livewire:menu :menu="$menu" />
                @endforeach
            </div>
        @endforeach
    </div>
</div>
