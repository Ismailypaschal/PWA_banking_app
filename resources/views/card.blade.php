<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Cards Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>

</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-x-hidden">
    <div class="relative flex h-full w-full flex-col min-h-screen">
        <div
            class="flex items-center px-4 pt-4 pb-4 justify-between sticky top-0 z-10 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md">
            <a href="/"
                class="flex items-center justify-center size-10 rounded-full bg-white dark:bg-[#1a2233] text-[#111418] dark:text-white shadow-sm"
                onclick="history.back()">
                <span class="material-symbols-outlined text-xl">arrow_back_ios_new</span>
            </a>
            <h1 class="text-lg font-bold tracking-tight">Cards Management</h1>
            <a href="{{ route('user.create-card') }}"
                class="flex items-center justify-center size-10 rounded-full bg-white dark:bg-[#1a2233] text-[#111418] dark:text-white shadow-sm">
                <span class="material-symbols-outlined text-xl">add</span>
            </a>
        </div>
        <div class="flex flex-col mt-2">
            <div class="flex overflow-x-auto no-scrollbar pb-6 pl-4 gap-4 snap-x snap-mandatory">
                <div class="flex-shrink-0 w-[90%] sm:w-[320px] snap-center">
                    <div
                        class="flex flex-col justify-between h-52 p-6 rounded-[24px] bg-gradient-to-br from-[#2a2a2a] to-[#000] border border-white/10 relative overflow-hidden shadow-2xl">
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 size-40 bg-white/5 rounded-full blur-3xl">
                        </div>
                        <div class="flex justify-between items-start z-10">
                            <div class="flex flex-col">
                                <span class="text-white/60 text-[10px] uppercase tracking-widest font-bold">Credit
                                    Card</span>
                                <h3 class="text-white font-bold">Platinum Rewards</h3>
                            </div>
                            <div class="h-8 w-12 bg-contain bg-no-repeat bg-right"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOWy9H_fxBZw5vm0_EmoTjLl8WHfdvN2peRm9gogroKQS6EDhEIkVwsIYcib3YOSNcLEtp_TTthg76ddbpjIqMrtyMAt9JgSrlX5eAmBXYRCPlzr6jmhRcg_vHq09S9UBsLuyMhfWZRrhzmRK5nybDdEsPNZ0k7my7YezYH3SkpeJrjoGCooPcjCPzN2uHh5IIYRmD1M9_49cq_S-dtkzEzpl2E_-RmwZq4wDyrskgROZKG9svTwt5bg-GDmrvc55aNFnL5U3_gRo')">
                            </div>
                        </div>
                        <div class="z-10">
                            <p class="text-white/60 text-xs font-mono tracking-widest mb-1">BALANCE</p>
                            <p class="text-white text-3xl font-extrabold tracking-tight mb-4">$12,450.00</p>
                            <div class="flex justify-between items-center">
                                <p class="text-white/90 font-mono tracking-[0.2em]">•••• •••• •••• 1122</p>
                                <p class="text-white/60 font-mono text-xs">12/28</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 w-[90%] sm:w-[320px] snap-center">
                    <div
                        class="flex flex-col justify-between h-52 py-6 px-4 rounded-[24px] bg-gradient-to-br from-primary to-[#0c3ca0] border border-white/10 relative overflow-hidden shadow-xl shadow-primary/20">
                        <div class="absolute bottom-0 right-0 -mb-10 -mr-10 size-40 bg-white/10 rounded-full blur-3xl">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-white/60 text-[10px] uppercase tracking-widest font-bold">Debit
                                Card</span>
                        </div>
                        <div class="z-10">
                            <div class="flex justify-between items-center">
                                <p class="text-white/90 text-xl font-mono tracking-[0.2em]">•••• •••• •••• 4589</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-start z-10">
                            <div>
                                <p class="text-white/60 text-[16px] font-mono tracking-widest">Card Holder</p>
                                <p class="text-white text-[18px] font-bold tracking-tight mb-4">Alex Johnson</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-white/60 font-mono text-[16px]">Expires in</p>
                                <p class=" font-mono text-[18px]">08/26</p>
                            </div>
                            <div class="flex flex-col items-center justify-center size-10 rounded-lg backdrop-blur-md">

                                <img class="w-3/5 mt-10" src="/imgs/logos/mastercard.png" alt="logo" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-2 flex-shrink-0"></div>
            </div>
        </div>
        <div class="px-4 mt-4 grid grid-cols-3 gap-3">
            <button
                class="flex flex-col items-center gap-2 p-4 rounded-2xl bg-white dark:bg-[#1a2233] border border-gray-100 dark:border-white/5 shadow-sm active:scale-95 transition-all">
                <div class="size-12 rounded-full bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">ac_unit</span>
                </div>
                <span class="text-[11px] font-bold dark:text-gray-300">Freeze Card</span>
            </button>
            <button
                class="flex flex-col items-center gap-2 p-4 rounded-2xl bg-white dark:bg-[#1a2233] border border-gray-100 dark:border-white/5 shadow-sm active:scale-95 transition-all">
                <div class="size-12 rounded-full bg-orange-50 dark:bg-orange-500/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-orange-500">lock_reset</span>
                </div>
                <span class="text-[11px] font-bold dark:text-gray-300">Change PIN</span>
            </button>
            <button
                class="flex flex-col items-center gap-2 p-4 rounded-2xl bg-white dark:bg-[#1a2233] border border-gray-100 dark:border-white/5 shadow-sm active:scale-95 transition-all">
                <div class="size-12 rounded-full bg-purple-50 dark:bg-purple-500/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-purple-500">visibility</span>
                </div>
                <span class="text-[11px] font-bold dark:text-gray-300">Card Details</span>
            </button>
        </div>
        <div class="px-4 mt-8 pb-32">
            <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4">Settings &amp; Limits</h3>
            <div class="flex flex-col gap-2">
                <div
                    class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm border border-gray-100 dark:border-white/5">
                    <div class="flex items-center gap-4">
                        <div class="size-10 rounded-xl bg-gray-50 dark:bg-white/5 flex items-center justify-center">
                            <span class="material-symbols-outlined text-gray-600 dark:text-gray-400">payments</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Daily Spend Limit</p>
                            <p class="text-xs text-gray-500">$2,000.00 max</p>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-gray-400">chevron_right</span>
                </div>
                <div
                    class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm border border-gray-100 dark:border-white/5">
                    <div class="flex items-center gap-4">
                        <div class="size-10 rounded-xl bg-gray-50 dark:bg-white/5 flex items-center justify-center">
                            <span class="material-symbols-outlined text-gray-600 dark:text-gray-400">public</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold">Online Transactions</p>
                            <p class="text-xs text-green-500">Enabled</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox" />
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                        </div>
                    </label>
                </div>
                <div
                    class="flex items-center justify-between p-4 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm border border-gray-100 dark:border-white/5">
                    <div class="flex items-center gap-4">
                        <div class="size-10 rounded-xl bg-red-50 dark:bg-red-500/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-red-500">no_sim</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-red-500">Replace Damaged Card</p>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-gray-400">chevron_right</span>
                </div>
            </div>
        </div>
        @include('partials.footer-navbar')

    </div>

</body>

</html>
