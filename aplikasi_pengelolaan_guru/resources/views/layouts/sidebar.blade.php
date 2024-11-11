<nav x-data="{ open: false }" class="d-flex flex-column bg-white h-full border-t min-h-screen">
    <div class="pt-8 pl-1">

        <div class="hidden space-x-8 pb-2 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="fa-solid fa-dashboard pr-2"></i> {{ __('Dashboard') }}
            </x-nav-link>
        </div>
        @hasrole('admin')
        <div class="hidden space-x-8 pb-2 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('guru.index')" :active="request()->routeIs('guru.index') || request()->routeIs('guru.create')">
                <i class="fa-solid fa-user pr-2"></i>{{ __('Data Guru') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 pb-2 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('jadwal.index')" :active="request()->routeIs('jadwal.index') || request()->routeIs('jadwal.create')">
                <i class="fa-solid fa-calendar-days pr-2"></i>{{ __('Data Jadwal Mengajar') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 pb-2 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('presensi.index')" :active="request()->routeIs('presensi.index') || request()->routeIs('presensi.create')">
                <i class="fa-solid fa-book pr-2"></i></i>{{ __('Data Presensi Guru') }}
            </x-nav-link>
        </div>
        @endhasrole

        @hasrole('guru')
        <div class="hidden space-x-8 pb-2 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('presensi.index')" :active="request()->routeIs('presensi.index') || request()->routeIs('presensi.create')">
                <i class="fa-solid fa-book"></i></i>{{ __('Data Presensi Guru') }}
            </x-nav-link>
        </div>
        @endhasrole
    </div>
</nav>
