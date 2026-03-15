{{-- <div
    class="fixed bottom-0 w-full bg-white/90 dark:bg-background-dark/90 backdrop-blur-lg border-t border-gray-200 dark:border-gray-800 pb-5 pt-2 px-4 z-20">
    <div class="flex justify-around items-center">
        <a href="{{ route('admin.dashboard') }}" class="flex flex-col items-center gap-1 p-2 text-primary">
            <span class="material-symbols-outlined filled text-[26px]"
                style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-[10px] font-bold">Home</span>
        </a>
        <a href="{{ route('admin.users') }}"
            class="flex flex-col items-center gap-1 p-2 text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
            <span class="material-symbols-outlined text-[26px]">person</span>
            <span class="text-[10px] font-medium">Users</span>
        </a>
        <a href="{{ route('user.account-details') }}"
            class="flex items-center justify-center -mt-8 size-14 rounded-full bg-primary text-white shadow-lg shadow-primary/40">
            <span class="material-symbols-outlined text-3xl">qr_code_scanner</span>
        </a>
        <a href="{{ route('admin.suspend') }}"
            class="flex flex-col items-center gap-1 p-2 text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
            <span class="material-symbols-outlined text-[26px]">block</span>
            <span class="text-[10px] font-medium">Suspend</span>
        </a>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button
                class="flex flex-col items-center gap-1 p-2 text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300">
                <span class="material-symbols-outlined transition-transform group-hover:-translate-x-1">logout</span>
                <span class="text-[10px] font-medium">logout</span>
            </button>
        </form>
    </div>
</div> --}}

<nav
    class="fixed bottom-0 left-0 right-0 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-t border-slate-200 dark:border-slate-800 px-6 py-3 flex justify-between items-center z-50">
    <a href="{{ route('admin.dashboard') }}">
        <div
            class="flex flex-col items-center gap-1 p-2 {{ request()->routeIs('admin.dashboard') ? 'text-primary' : 'text-slate-400' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[10px] font-medium">Home</span>
        </div>
    </a>
    <a href="{{ route('admin.users') }}">
        <div
            class="flex flex-col items-center gap-1 p-2 {{ request()->routeIs('admin.users', 'admin.user.deposits', 'admin.update.deposits', 'admin.user.transfers') ? 'text-primary' : 'text-slate-400' }}">
            <span class="material-symbols-outlined"
                style="{{ request()->routeIs('admin.users', 'admin.user.deposits', 'admin.update.deposits', 'admin.user.transfers') ? "font-variation-settings: 'FILL' 1;" : '' }}">group</span>
            <span class="text-[10px] font-bold">Users</span>
        </div>
    </a>
    <a href="{{ route('admin.suspend') }}">
        <div
            class="flex flex-col items-center gap-1 p-2 {{ request()->routeIs('admin.suspend') ? 'text-primary' : 'text-slate-400' }}">
            <span class="material-symbols-outlined">block</span>
            <span class="text-[10px] font-medium">Suspend</span>
        </div>
    </a>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="flex flex-col items-center gap-1 p-2 text-slate-400">
            <span class="material-symbols-outlined">logout</span>
            <span class="text-[10px] font-medium">logout</span>
        </button>
    </form>

</nav>
