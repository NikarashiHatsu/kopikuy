@props([
    'index' => 0,
    'title' => '',
    'description' => '',
])

<div>
    <div class="flex items-center mb-3">
        <div class="w-12 h-12 bg-stone-300 rounded-lg flex items-center justify-center">
            {{ $icon }}
        </div>

        <div class="w-12 border-t border-dashed border-stone-300"></div>

        <div class="w-8 h-8 flex items-center justify-center bg-stone-100 text-center rounded-full shadow">
            {{ $index }}
        </div>
    </div>

    <p class="font-display font-light uppercase text-xl">
        {{ $title }}
    </p>

    <p class="text-sm">
        {{ $description }}
    </p>
</div>
