<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/output.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col font-display">
    <!-- Header -->
    <header
        class="flex items-center justify-between px-6 pt-8 pb-4 bg-background-light dark:bg-background-dark sticky top-0 z-40">
        <div class="flex items-center gap-3">
            <div
                class="size-10 rounded-full bg-primary/20 flex items-center justify-center overflow-hidden border border-primary/30">
                <img alt="User Profile" class="w-full h-full object-cover" data-alt="Portrait of a smiling young man"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6xc3g2F6D0o9lc_VVnI9zXD9HA9RfkPlv4C-YrlHvHPj8jkVLDwJyHkuakt3ZyaIgLhACQ4vMvAoVXi0v8JfY-bGgA3VyC8IzGtdGIOo2T-8XCrSM6e4EUaFzGEQYEUcjMz6XxtsehMziqNbknyFqt0Vx0Ie-bABCKnWZOg5tMpIH3ZLiNpiawV2Jgj5WZWaxF_q1NaMV9Sc8y3ODiuYBOveEhrqihff50zKaLf9OHhXKeT0sfa2DUNCpePf2ZlJPQ-ke-3KDpXQ" />
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Administrator,</p>
                <h1 class="text-base font-bold leading-tight">
                    {{ $admin->first_name }} {{ $admin->last_name }}
                </h1>
            </div>
        </div>
        <div class="relative p-2 rounded-xl bg-slate-200/50 dark:bg-primary/10 hover:bg-primary/20 transition-colors">
            <button id="theme-toggle"
                class="flex items-center justify-center size-10 rounded-full bg-white dark:bg-[#1a2233] text-[#111418] dark:text-white hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors shadow-sm">
                <span id="theme-dark-icon" class="material-symbols-outlined text-xl hidden dark:block">
                    light_mode
                </span>
                <span id="theme-light-icon" class="material-symbols-outlined text-xl block dark:hidden">
                    dark_mode
                </span>
            </button>
        </div>
    </header>
    <main class="flex-1 px-6 pb-24 overflow-y-auto">
        <!-- Total Balance Card -->
        <div
            class="mt-4 p-6 rounded-xl bg-gradient-to-br from-primary to-[#0a3691] shadow-xl shadow-primary/20 relative overflow-hidden">
            <div class="absolute -right-10 -top-10 size-40 bg-white/10 rounded-full blur-3xl"></div>
            <div class="relative z-10">
                <div class="flex justify-between items-start mb-6">
                    <p class="text-primary-100/80 text-sm font-medium">ZITA BANK ADMIN</p>
                    <span class="material-symbols-outlined text-white/50">contactless</span>
                </div>
                <div class="mb-8">
                    <p class="text-white/60 text-xs mt-1 flex items-center gap-1"><span
                            class="material-symbols-outlined text-[14px]">trending_up</span> +8.4% growth since last
                        quarter</p>
                </div>
                <div class="flex justify-between items-end">
                    <p class="text-white/80 font-mono text-sm tracking-widest">**** **** **** 8824</p>
                    <div class="size-8 flex items-center">
                        <div class="w-6 h-6 rounded-full bg-red-500/80 -mr-2"></div>
                        <div class="w-6 h-6 rounded-full bg-orange-500/80"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Actions -->
        <div class="grid grid-cols-4 gap-4 mt-8">
            <div class="flex flex-col items-center gap-2"><button
                    class="size-14 rounded-xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center text-primary transition-transform active:scale-95 border border-slate-100 dark:border-slate-700/50"><span
                        class="material-symbols-outlined">analytics</span></button><span
                    class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Reports</span></div>
            <div class="flex flex-col items-center gap-2"><button
                    class="size-14 rounded-xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center text-primary transition-transform active:scale-95 border border-slate-100 dark:border-slate-700/50"><span
                        class="material-symbols-outlined">rule</span></button><span
                    class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Logs</span></div>
            <div class="flex flex-col items-center gap-2"><button
                    class="size-14 rounded-xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center text-primary transition-transform active:scale-95 border border-slate-100 dark:border-slate-700/50"><span
                        class="material-symbols-outlined">verified_user</span></button><span
                    class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Approvals</span></div>
            <div class="flex flex-col items-center gap-2"><button
                    class="size-14 rounded-xl bg-white dark:bg-slate-800 shadow-sm flex items-center justify-center text-primary transition-transform active:scale-95 border border-slate-100 dark:border-slate-700/50"><span
                        class="material-symbols-outlined">contact_support</span></button><span
                    class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Support</span></div>
        </div>
        <!-- My Accounts -->
        <section class="mt-10">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold">System Metrics</h3>
                <!-- <button class="text-primary text-sm font-semibold">See All</button> -->
            </div>
            <div class="flex gap-4 overflow-x-auto pb-2 no-scrollbar -mx-2 px-2">
                <div
                    class="min-w-[180px] md:w-3/4 p-4 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700/50">
                    <div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-3">
                        <span class="material-symbols-outlined text-lg">group</span>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Total Users</p>
                    <p class="text-base font-bold mt-1">{{ $users->count() }}</p>
                    <p class="text-[10px] text-green-500 mt-2">+12% today</p>
                </div>
                <div
                    class="min-w-[180px] md:w-3/4 p-4 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700/50">
                    <div class="size-8 rounded-lg bg-green-500/10 flex items-center justify-center text-green-500 mb-3">
                        <span class="material-symbols-outlined text-lg">group</span>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Active users</p>
                    <p class="text-base font-bold mt-1">{{ $users->where('status', 'active')->count() }}</p>
                    <p class="text-[10px] text-slate-400 mt-2">+12% today</p>
                </div>
                <div
                    class="min-w-[180px] md:w-3/4 p-4 rounded-xl bg-white dark:bg-slate-800 border border-slate-100 dark:border-slate-700/50">
                    <div class="size-8 rounded-lg bg-red-500/10 flex items-center justify-center text-red-500 mb-3">
                        <span class="material-symbols-outlined text-lg">group</span>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Suspended users</p>
                    <p class="text-base font-bold mt-1">{{ $users->where('status', 'suspended')->count() }}</p>
                    <p class="text-[10px] text-slate-400 mt-2">Healthy</p>
                </div>
            </div>
        </section>
        <!-- Recent Transactions -->
        <section class="mt-8 mb-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold">Global Activity</h3>
                <!-- <button class="text-primary text-sm font-semibold">Filter</button> -->
            </div>
            <div class="space-y-3">
                <div
                    class="flex items-center justify-between p-3 rounded-xl bg-white dark:bg-slate-800/40 border border-slate-100 dark:border-slate-700/30">
                    <div class="flex items-center gap-3">
                        <div
                            class="size-11 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                            <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">person_add</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold">New User Registration</p>
                            <p class="text-[11px] text-slate-500">John Doe</p>
                        </div>
                    </div>
                    <p class="text-sm font-bold text-primary">Active</p>
                    {{-- <p class="text-sm font-bold text-primary"><%= user.isActive ? "Active" : "Inactive" %></p> --}}
                </div>
                <div
                    class="flex items-center justify-between p-3 rounded-xl bg-white dark:bg-slate-800/40 border border-slate-100 dark:border-slate-700/30">
                    <div class="flex items-center gap-3">
                        <div
                            class="size-11 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                            <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">security</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Firewall Alert</p>
                            <p class="text-[11px] text-slate-500">Network •</p>
                        </div>
                    </div>
                    <p class="text-sm font-bold text-red-500">Resolved</p>
                </div>
                <div
                    class="flex items-center justify-between p-3 rounded-xl bg-white dark:bg-slate-800/40 border border-slate-100 dark:border-slate-700/30">
                    <div class="flex items-center gap-3">
                        <div
                            class="size-11 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                            <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">database</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Database Backup</p>
                            <p class="text-[11px] text-slate-500">System • 1 hour ago</p>
                        </div>
                    </div>
                    <p class="text-sm font-bold text-green-500">Success</p>
                </div>
            </div>
        </section>
    </main>
    <!-- Bottom Nav Bar -->
    @include('admin.admin-footer');


    <script src="/js/background.js"></script>

</body>

</html>
