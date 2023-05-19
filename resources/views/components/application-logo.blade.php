@props([
    'dark' => true,
])

<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <x-phosphor-coffee @class(["fill-current w-8 h-8 shrink-0", "text-white" => $dark, "text-gray-700" => ! $dark]) />
    <span @class(["font-display text-2xl ml-2 uppercase", "text-white" => $dark, "text-gray-700" => ! $dark])>
        {{ config('app.name') }}
    </span>
</div>
