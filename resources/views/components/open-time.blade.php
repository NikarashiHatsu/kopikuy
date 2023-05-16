@props(['day', 'time', 'holiday' => false])

<p class="flex justify-between items-center">
    <span>
        {{ $day }}
    </span>

    @if ($holiday)
        <span class="text-yellow-400">
            TUTUP
        </span>
    @else
        <span>
            {{ $time }}
        </span>
    @endif
</p>
