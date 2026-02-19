<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Banking Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/output.css">
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-x-hidden">
    <div class="relative flex h-full w-full flex-col min-h-screen">
        {{-- <aside
            class="fixed inset-y-0 left-0 z-50 w-72 -translate-x-full transform bg-white shadow-xl transition-transform duration-300 dark:bg-surface-dark-support xl:translate-x-0 xl:shadow-none rounded-r-3xl my-4 ml-4 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-200 dark:scrollbar-thumb-gray-700 rounded-xl"
            aria-label="Main navigation" id="sidebar">
            <!-- Header / Logo -->
            <div class="px-6 py-6 border-b border-gray-200 dark:border-[#324467]">
                <div class="flex items-center gap-3">
                    <img src="/assets/img/logo-ct-dark.png" class="h-8 w-auto dark:hidden" alt="Zita Bank" />
                    <img src="/assets/img/logo-ct.png" class="h-8 w-auto hidden dark:block" alt="Zita Bank" />
                    <span class="text-gray-900 dark:text-white text-xl font-bold tracking-tight">
                        Zita Bank
                    </span>
                </div>

                <!-- Mobile close -->
                <button type="button"
                    class="absolute right-5 top-6 xl:hidden text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 transition-colors"
                    data-sidebar-close>
                    <span class="material-symbols-outlined text-2xl">close</span>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="px-4 py-6 flex flex-col gap-1">
                <!-- Main items -->
                <a href="/users"
                    class="flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors {{ request()->is('users') || request()->is('users/*') ? 'bg-gray-100 dark:bg-[#232f48] text-primary font-medium' : '' }}">
                    <span class="material-symbols-outlined text-2xl text-blue-600 dark:text-blue-400">dashboard</span>
                    <span class="text-base font-medium">Dashboard</span>
                </a>

                <a href="{{ route('user.transfer') }}"
                    class="flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors {{ request()->is('transaction/transfer') ? 'bg-gray-100 dark:bg-[#232f48] text-primary font-medium' : '' }}">
                    <span
                        class="material-symbols-outlined text-2xl text-orange-600 dark:text-orange-400">swap_horiz</span>
                    <span class="text-base font-medium">Transfer</span>
                </a>

                <a href="/users/billing"
                    class="flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors {{ request()->is('users/billing') ? 'bg-gray-100 dark:bg-[#232f48] text-primary font-medium' : '' }}">
                    <span
                        class="material-symbols-outlined text-2xl text-emerald-600 dark:text-emerald-400">credit_card</span>
                    <span class="text-base font-medium">Virtual Card</span>
                </a>

                <a href="{{ route('user.transaction') }}"
                    class="flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors {{ request()->is('users/transactions') ? 'bg-gray-100 dark:bg-[#232f48] text-primary font-medium' : '' }}">
                    <span
                        class="material-symbols-outlined text-2xl text-cyan-600 dark:text-cyan-400">receipt_long</span>
                    <span class="text-base font-medium">Transactions</span>
                </a>

                <!-- Section divider -->
                <div class="my-5 px-5">
                    <h6 class="text-xs font-semibold uppercase tracking-wide text-secondary-text">
                        Account
                    </h6>
                </div>

                <a href="{{ route('user.profile') }}"
                    class="flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-[#232f48] transition-colors {{ request()->is('users/profile') ? 'bg-gray-100 dark:bg-[#232f48] text-primary font-medium' : '' }}">
                    <span class="material-symbols-outlined text-2xl text-gray-600 dark:text-gray-400">person</span>
                    <span class="text-base font-medium">Profile</span>
                </a>

                <form action="/users/logout" method="POST"
                    class="flex items-center gap-4 px-5 py-3.5 rounded-xl text-gray-700 dark:text-gray-200 hover:bg-red-50 dark:hover:bg-red-950/30 transition-colors">
                    @csrf

                    <span class="material-symbols-outlined text-2xl text-red-600 dark:text-red-400">logout</span>
                    <button type="submit" class="text-base font-medium text-left w-full">
                        Logout
                    </button>
                </form>
            </nav>
        </aside> --}}
        <div
            class="flex items-center px-4 pt-4 pb-2 justify-between sticky top-0 z-10 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md">
            <div class="flex items-center gap-3">
                <div class="size-10 rounded-full bg-center bg-cover border-2 border-primary/20">
                    <img class="rounded-full" src="<%= user.avatar %>" alt="">
                </div>
                <div class="flex flex-col">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 leading-tight">{{ $greetingUser }}
                    </p>
                    <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">{{ $user->first_name }}
                        {{ $user->last_name }}</h2>
                </div>
            </div>
            <div class="flex items-center gap-2">
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
        </div>
        <div class="flex flex-col gap-2 px-4 py-4">
            <div
                class="flex flex-col gap-1 rounded-2xl p-6 bg-gradient-to-br from-primary to-[#0c3ca0] shadow-lg shadow-primary/20 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 rounded-full bg-white/10 blur-xl"></div>
                <div class="absolute bottom-0 left-0 -mb-4 -ml-4 w-32 h-32 rounded-full bg-black/10 blur-xl"></div>
                <div class="relative z-10">
                    <div class="flex justify-between items-start mb-2">
                        <p class="text-blue-100 text-sm font-medium">Total Net Worth</p>
                    </div>
                    <p class="text-3xl font-extrabold tracking-tight mb-4" id="amount"> {{ $account->balance }} USD
                    </p>
                    <button class="text-blue-200 hover:text-white transition-colors absolute top-10 right-2"
                        id="hide-btn">
                        <span class="material-symbols-outlined text-sm">visibility</span>
                    </button>
                    <div class="flex items-center gap-2 bg-white/10 w-fit px-3 py-1 rounded-full backdrop-blur-sm">
                        <span class="material-symbols-outlined text-[#4aff96] text-sm font-bold">trending_up</span>
                        <p class="text-[#4aff96] text-xs font-bold">+$450 this month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="@container px-2">
            <div class="gap-2 px-2 grid grid-cols-4">
                <a href="{{ route('user.transfer') }}" class="flex flex-col items-center gap-2 py-2 group">
                    <div
                        class="flex items-center justify-center size-14 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm group-active:scale-95 transition-transform duration-100">
                        <span class="material-symbols-outlined text-primary text-2xl">swap_horiz</span>
                    </div>
                    <p class="text-xs font-medium text-gray-600 dark:text-gray-300">Transfer</p>
                </a>
                <a href="{{ route('user.account-details') }}" class="flex flex-col items-center gap-2 py-2 group">
                    <div
                        class="flex items-center justify-center size-14 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm group-active:scale-95 transition-transform duration-100">
                        <span class="material-symbols-outlined text-primary text-2xl">receipt_long</span>
                    </div>
                    <p class="text-xs font-medium text-gray-600 dark:text-gray-300">Account</p>
                </a>
                <a href="{{ route('user.deposit') }}" class="flex flex-col items-center gap-2 py-2 group">
                    <div
                        class="flex items-center justify-center size-14 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm group-active:scale-95 transition-transform duration-100">
                        <span class="material-symbols-outlined text-primary text-2xl">arrow_circle_down</span>
                    </div>
                    <p class="text-xs font-medium text-gray-600 dark:text-gray-300">Deposit</p>
                </a>
                <a href="{{ route('user.send') }}" class="flex flex-col items-center gap-2 py-2 group">
                    <div
                        class="flex items-center justify-center size-14 rounded-2xl bg-white dark:bg-[#1a2233] shadow-sm group-active:scale-95 transition-transform duration-100">
                        <span class="material-symbols-outlined text-primary text-2xl">send</span>
                    </div>
                    <p class="text-xs font-medium text-gray-600 dark:text-gray-300">Send</p>
                </a>
            </div>
        </div>
        <div class="flex flex-col mt-6">
            <div class="flex items-center justify-between px-4 mb-3">
                <h3 class="text-lg font-bold leading-tight">My Accounts</h3>
                <button class="text-primary text-sm font-bold">See All</button>
            </div>
            <div class="flex overflow-x-auto no-scrollbar pb-4 pl-4 gap-4 snap-x snap-mandatory">
                <div class="flex-shrink-0 w-[85%] sm:w-[320px] snap-center">
                    <div
                        class="flex flex-col justify-between h-48 p-5 rounded-2xl bg-[#1a2233] border border-[#2d3a54] relative overflow-hidden group">
                        <div
                            class="absolute right-0 top-0 h-full w-2/3 bg-gradient-to-l from-[#232f48] to-transparent opacity-50">
                        </div>
                        <div class="flex justify-between items-start z-10">
                            <div
                                class="flex items-center justify-center size-10 rounded-lg bg-white/10 backdrop-blur-md">
                                <span class="material-symbols-outlined text-white text-xl">account_balance</span>
                            </div>
                            <span class="text-white/60 text-xs font-mono tracking-wider">•••• 4589</span>
                        </div>
                        <div class="z-10">
                            <p class="text-white/60 text-sm font-medium mb-1">Checking Account</p>
                            <p class="text-white text-2xl font-bold tracking-tight">${{ $account->balance }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 w-[85%] sm:w-[320px] snap-center">
                    <div
                        class="flex flex-col justify-between h-48 p-5 rounded-2xl bg-white dark:bg-[#1a2233] border border-gray-200 dark:border-[#2d3a54] relative overflow-hidden shadow-sm">
                        <div class="absolute right-0 top-0 h-full w-2/3 bg-gradient-to-l from-primary/5 to-transparent">
                        </div>
                        <div class="flex justify-between items-start z-10">
                            <div
                                class="flex items-center justify-center size-10 rounded-lg bg-primary/10 backdrop-blur-md">
                                <span class="material-symbols-outlined text-primary text-xl">savings</span>
                            </div>
                            <span class="text-gray-400 dark:text-white/60 text-xs font-mono tracking-wider">••••
                                9921</span>
                        </div>
                        <div class="z-10">
                            <p class="text-gray-500 dark:text-white/60 text-sm font-medium mb-1">Savings Goal</p>
                            <p class="text-gray-900 dark:text-white text-2xl font-bold tracking-tight">$11,500.00</p>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0 w-[85%] sm:w-[320px] snap-center">
                    <div
                        class="flex flex-col justify-between h-48 p-5 rounded-2xl bg-gradient-to-br from-[#2a2a2a] to-[#111] border border-gray-800 relative overflow-hidden shadow-lg">
                        <div class="absolute bottom-0 right-0 -mb-6 -mr-6 size-32 bg-white/5 rounded-full blur-2xl">
                        </div>
                        <div class="flex justify-between items-start z-10">
                            <div class="h-8 w-12 bg-contain bg-no-repeat" data-alt="Visa Logo"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOWy9H_fxBZw5vm0_EmoTjLl8WHfdvN2peRm9gogroKQS6EDhEIkVwsIYcib3YOSNcLEtp_TTthg76ddbpjIqMrtyMAt9JgSrlX5eAmBXYRCPlzr6jmhRcg_vHq09S9UBsLuyMhfWZRrhzmRK5nybDdEsPNZ0k7my7YezYH3SkpeJrjoGCooPcjCPzN2uHh5IIYRmD1M9_49cq_S-dtkzEzpl2E_-RmwZq4wDyrskgROZKG9svTwt5bg-GDmrvc55aNFnL5U3_gRo')">
                            </div>
                            <span class="text-white/60 text-xs font-mono tracking-wider">•••• 1122</span>
                        </div>
                        <div class="z-10">
                            <p class="text-white/60 text-sm font-medium mb-1">Visa Signature</p>
                            <div class="flex justify-between items-end">
                                <p class="text-white text-2xl font-bold tracking-tight">-$450.00</p>
                                <span class="text-red-400 text-xs bg-red-400/10 px-2 py-1 rounded">Due in 5 days</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-2 flex-shrink-0"></div>
            </div>
        </div>
        <div class="flex flex-col px-4 mt-6 pb-24">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold leading-tight mb-4">Recent Activity</h3>
                <a href="{{ route('user.transaction') }}" class="mr-2 text-green-500 dark:text-green-500">View All</a>
            </div>
                    <div class="flex flex-col gap-3">
                        @foreach ($transactions as $transaction)
                            <div
                                class="flex items-center justify-between p-3 rounded-xl bg-white dark:bg-[#1a2233] shadow-sm border border-gray-100 dark:border-transparent">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-green-100 dark:bg-green-500/20 text-green-600 dark:text-green-400">
                                        @if ($transaction->description === 'family')
                                            <span class="material-symbols-outlined">person</span>
                                        @elseif($transaction->description === 'business')
                                            <span class="material-symbols-outlined">business</span>
                                        @elseif($transaction->description === 'rent')
                                            <span class="material-symbols-outlined">house</span>
                                        @elseif($transaction->description === 'food')
                                            <span class="material-symbols-outlined">restaurant</span>
                                        @elseif($transaction->description === 'investment')
                                            <span class="material-symbols-outlined">trending_up</span>
                                        @else
                                            <span class="material-symbols-outlined">shopping_bag</span>
                                        @endif
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm font-bold text-gray-900 dark:text-white">
                                            {{ $transaction->description }}</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            {{ $transaction->created_at->isToday() ? 'Today' : $transaction->created_at->format('M d, Y') }},
                                            {{ $transaction->created_at->format('g:i A') }}</p>
                                    </div>
                                </div>
                                @if ($transaction->type === 'debit')
                                    <p class="text-sm font-bold text-red-400 dark:text-red-500">
                                        -${{ $transaction->amount }}
                                    </p>
                                @else
                                    {
                                    <p class="text-sm font-bold text-green-600 dark:text-green-400">
                                        +${{ $transaction->amount }}</p>
                                    }
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('partials.footer-navbar')

            </div>
            <script src="/js/background.js"></script>
</body>

</html>
