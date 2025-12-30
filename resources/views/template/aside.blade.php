<aside id="sidebar"
    class="
        fixed lg:static inset-y-0 left-0 z-40
        w-screen lg:w-75 bg-white px-4 py-6
        shadow-[4px_0_10px_-2px_rgba(0,0,0,0.1)]
        transform -translate-x-full lg:translate-x-0
        transition-transform duration-300 ease-in-out
    ">
    <div class="h-15 mb-5 flex justify-between items-center">
        <p class="text-2xl tracking-tight text-stone-700 font-bold drop-shadow-sm uppercase">
            {{ config('app.prefix_name_app') }}</p>
        <button onclick="toggleSidebar()" class="lg:hidden p-1">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>
    </div>
    <p class="text-slate-400">Main Menu</p>
    <div class="flex flex-col py-5 gap-2">

        <a href="{{ url('/dashboard') }}"
            class="flex items-center gap-3 p-4 rounded-xl text-md cursor-pointer
                    {{ Request::is('dashboard*') ? 'bg-stone-200 text-slate-800' : 'bg-stone-0 text-slate-400' }}
                    hover:bg-stone-200 transition-all duration-200 ease-in-out">

            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ url('/office') }}"
            class="flex items-center gap-3 p-4 rounded-xl text-md cursor-pointer
                    {{ Request::is('office*') ? 'bg-stone-200 text-slate-800' : 'bg-stone-0 text-slate-400' }}
                    hover:bg-stone-200 transition-all duration-200 ease-in-out">

            <i data-lucide="building-2" class="w-5 h-5"></i>
            <span>Kantor</span>
        </a>

        <a href="{{ route('attendances.index') }}"
            class="flex items-center gap-3 p-4 rounded-xl text-md cursor-pointer
                    {{ Request::is('attendances*') ? 'bg-stone-200 text-slate-800' : 'bg-stone-0 text-slate-400' }}
                    hover:bg-stone-200 transition-all duration-200 ease-in-out">

            <i data-lucide="clipboard-check" class="w-5 h-5"></i>
            <span>Absensi</span>
        </a>

        <a href="{{ url('/schedule') }}"
            class="flex items-center gap-3 p-4 rounded-xl text-md cursor-pointer
                    {{ Request::is('schedule*') ? 'bg-stone-200 text-slate-800' : 'bg-stone-0 text-slate-400' }}
                    hover:bg-stone-200 transition-all duration-200 ease-in-out">

            <i data-lucide="calendar-check" class="w-5 h-5"></i>
            <span>Kegiatan</span>
        </a>

        <a href="{{ url('/report') }}"
            class="flex items-center gap-3 p-4 rounded-xl text-md cursor-pointer
                    {{ Request::is('report*') ? 'bg-stone-200 text-slate-800' : 'bg-stone-0 text-slate-400' }}
                    hover:bg-stone-200 transition-all duration-200 ease-in-out">

            <i data-lucide="file-text" class="w-5 h-5"></i>
            <span>Laporan</span>
        </a>

    </div>

</aside>

<div id="sidebarOverlay" class="fixed inset-0 bg-black/40 z-30 hidden lg:hidden" onclick="toggleSidebar()">
</div>
