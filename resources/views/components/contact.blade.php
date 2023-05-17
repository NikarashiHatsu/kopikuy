@props([
    'contact1' => [
        'href' => '',
        'text' => '',
    ],
    'contact2' => [
        'href' => '',
        'text' => '',
    ],
])

<div class="flex items-center mb-6">
    <div class="w-12 h-12 bg-white rounded flex items-center justify-center flex-shrink-0">
        {{ $icon }}
    </div>

    <div class="ml-4 prose-p:mt-0 prose-p:mb-0 prose-p:leading-tight">
        <p>
            <a href="{{ $contact1['href'] }}" class="transition duration-300 ease-in-out no-underline hover:text-amber-500 text-sm">
                {{ $contact1['text'] }}
            </a>
        </p>
        @if (!empty($contact2))
            <p>
                <a href="{{ $contact2['href'] }}" class="transition duration-300 ease-in-out no-underline hover:text-amber-500 text-sm">
                    {{ $contact2['text'] }}
                </a>
            </p>
        @endif
    </div>
</div>
