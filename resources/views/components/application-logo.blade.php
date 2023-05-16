<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <x-phosphor-coffee class="text-white fill-current w-8 h-8" />
    <span class="font-display text-white text-2xl ml-2 uppercase">
        {{ config('app.name') }}
    </span>
</div>
