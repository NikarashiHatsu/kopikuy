<div class="drawer-side border-r">
    <label for="drawer" class="drawer-overlay"></label>
    <ul class="menu p-4 w-64 bg-base-100 text-base-content">
        <li class="border-b mb-4 pb-4">
            <x-application-logo :dark="false" />
        </li>

        <li>
            <a href="{{ route('dashboard.index') }}">
                <x-phosphor-house class="w-4 h-4" />
                <span>
                    Dashboard
                </span>
            </a>
        </li>

        <li class="menu-title mt-4 mb-2">
            Data Master
        </li>
        <li>
            <a href="{{ route('dashboard.master.category.index') }}" @class(['active' => request()->routeIs('dashboard.master.category.*')])>
                <x-phosphor-tag class="w-4 h-4" />
                <span>
                    Kategori
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.master.product.index') }}" @class(['active' => request()->routeIs('dashboard.master.product.*')])>
                <x-phosphor-coffee class="w-4 h-4" />
                <span>
                    Produk
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.master.seat.index') }}" @class(['active' => request()->routeIs('dashboard.master.seat.*')])>
                <x-phosphor-armchair class="w-4 h-4" />
                <span>
                    Seat
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-layout class="w-4 h-4" />
                <span>
                    Layout
                </span>
            </a>
        </li>

        <li class="menu-title mt-4 mb-2">
            Transaksi
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-package class="w-4 h-4" />
                <span class="w-full flex items-center justify-between">
                    <span>
                        Delivery
                    </span>
                    <span class="badge badge-info">
                        0
                    </span>
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-map-pin class="w-4 h-4" />
                <span class="w-full flex items-center justify-between">
                    <span>
                        On-site
                    </span>
                    <span class="badge badge-info">
                        0
                    </span>
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-book-bookmark class="w-4 h-4" />
                <span class="w-full flex items-center justify-between">
                    <span>
                        Reservasi
                    </span>
                    <span class="badge badge-info">
                        0
                    </span>
                </span>
            </a>
        </li>

        <li class="menu-title mt-4 mb-2">
            Pengaturan
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-gear class="w-4 h-4" />
                <span>
                    Pengaturan Web
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-user-gear class="w-4 h-4" />
                <span>
                    Pengaturan Akun
                </span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <x-phosphor-sign-out class="w-4 h-4" />
                <span>
                    Keluar
                </span>
            </a>
        </li>
    </ul>
</div>
