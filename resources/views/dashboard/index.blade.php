<x-app-layout>
    <div class="prose max-w-4xl">
        <h2>
            Dashboard
        </h2>

        <p>
            Selamat datang, {{ auth()->user()->name }}. Berikut adalah informasi
            yang bisa diberikan pada saat ini. Gunakan opsi filtering untuk
            melihat informasi yang lebih spesifik.
        </p>

        <div class="grid grid-cols-3 grid-flow-row gap-6 w-full">
            <div class="stats shadow col-span-3 md:col-span-1">
                <div class="stat">
                    <div class="stat-figure text-info">
                        <x-phosphor-truck class="w-8 h-8" />
                    </div>
                    <div class="stat-title">Delivery</div>
                    <div class="stat-value">0</div>
                    <div class="stat-desc">{{ now()->isoFormat('LL') }}</div>
                </div>
            </div>

            <div class="stats shadow col-span-3 md:col-span-1">
                <div class="stat">
                    <div class="stat-figure text-success">
                        <x-phosphor-map-pin class="w-8 h-8" />
                    </div>
                    <div class="stat-title">On-site</div>
                    <div class="stat-value">0</div>
                    <div class="stat-desc">{{ now()->isoFormat('LL') }}</div>
                </div>
            </div>

            <div class="stats shadow col-span-3 md:col-span-1">
                <div class="stat">
                    <div class="stat-figure text-warning">
                        <x-phosphor-book-bookmark class="w-8 h-8" />
                    </div>
                    <div class="stat-title">Reservasi</div>
                    <div class="stat-value">0</div>
                    <div class="stat-desc">{{ now()->isoFormat('LL') }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
