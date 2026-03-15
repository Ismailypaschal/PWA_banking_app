<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Customer Support - Online Banking</title>
    <!-- Tailwind CSS -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>

</head>

<body class="bg-background-light dark:bg-background-dark font-display antialiased">
    <div class="relative flex h-full min-h-screen w-full flex-col overflow-x-hidden max-w-md mx-auto shadow-2xl">
        <!-- sidenav  -->
        {{-- <aside
            class="fixed inset-y-0 left-0 z-50 w-72 -translate-x-full transform bg-white shadow-xl transition-transform duration-300 dark:bg-surface-dark-support xl:translate-x-0 xl:shadow-none rounded-r-3xl my-4 ml-4 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-200 dark:scrollbar-thumb-gray-700"
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
        <!-- Top App Bar -->
        <div
            class="sticky top-0 z-50 bg-background-light dark:bg-background-dark border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center p-4 justify-between">
                <div
                    class="flex size-10 shrink-0 items-center justify-center rounded-full active:bg-gray-200 dark:active:bg-surface-dark-support cursor-pointer text-gray-900 dark:text-white">
                    <span class="material-symbols-outlined" style="font-size: 24px;">arrow_back</span>
                </div>
                <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Support
                </h2>
                <div class="size-10"></div> <!-- Spacer for visual balance -->
            </div>
            <!-- Sticky Search Bar Container -->
            <div class="px-4 pb-4">
                <label class="flex flex-col w-full h-12">
                    <div class="flex w-full flex-1 items-stretch rounded-xl h-full shadow-sm">
                        <div
                            class="text-secondary-text flex border-none bg-white dark:bg-[#232f48] items-center justify-center pl-4 rounded-l-xl">
                            <span class="material-symbols-outlined" style="font-size: 24px;">search</span>
                        </div>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-gray-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary border-none bg-white dark:bg-[#232f48] focus:border-none h-full placeholder:text-secondary-text px-4 rounded-l-none pl-2 text-base font-normal leading-normal"
                            placeholder="How can we help you?" value="" />
                    </div>
                </label>
            </div>
        </div>
        <!-- Scrollable Content -->
        <div class="flex-1 pb-8">
            <!-- Greeting -->
            <div class="px-4 py-6">
                <h1 class="text-gray-900 dark:text-white text-[28px] font-bold leading-tight tracking-tight">
                    Hello, Alex.<br />
                    <span class="text-secondary-text text-xl font-medium">What issue are you facing?</span>
                </h1>
            </div>
            <!-- Quick Actions Grid -->
            <div class="px-4 pb-6">
                <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] pb-4">
                    Quick
                    Actions</h2>
                <div class="grid grid-cols-2 gap-3">
                    <button
                        class="flex flex-col gap-3 rounded-xl border border-gray-200 dark:border-[#324467] bg-white dark:bg-surface-dark-support p-4 items-start shadow-sm hover:border-primary transition-colors group">
                        <div
                            class="text-primary bg-primary/10 p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 24px;">security</span>
                        </div>
                        <span class="text-gray-900 dark:text-white text-sm font-bold leading-tight">Report Fraud</span>
                    </button>
                    <button
                        class="flex flex-col gap-3 rounded-xl border border-gray-200 dark:border-[#324467] bg-white dark:bg-surface-dark-support p-4 items-start shadow-sm hover:border-primary transition-colors group">
                        <div
                            class="text-primary bg-primary/10 p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 24px;">lock</span>
                        </div>
                        <span class="text-gray-900 dark:text-white text-sm font-bold leading-tight">Lock Card</span>
                    </button>
                    <button
                        class="flex flex-col gap-3 rounded-xl border border-gray-200 dark:border-[#324467] bg-white dark:bg-surface-dark-support p-4 items-start shadow-sm hover:border-primary transition-colors group">
                        <div
                            class="text-primary bg-primary/10 p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 24px;">pin</span>
                        </div>
                        <span class="text-gray-900 dark:text-white text-sm font-bold leading-tight">Reset PIN</span>
                    </button>
                    <button
                        class="flex flex-col gap-3 rounded-xl border border-gray-200 dark:border-[#324467] bg-white dark:bg-surface-dark-support p-4 items-start shadow-sm hover:border-primary transition-colors group">
                        <div
                            class="text-primary bg-primary/10 p-2 rounded-lg group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 24px;">local_atm</span>
                        </div>
                        <span class="text-gray-900 dark:text-white text-sm font-bold leading-tight">Find ATM</span>
                    </button>
                </div>
            </div>
            <div class="h-2 bg-gray-100 dark:bg-[#111722]/50 w-full mb-6"></div>
            <!-- Contact Support Section -->
            <div class="px-4 pb-6">
                <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] pb-4">
                    Direct Support</h2>
                <div class="flex flex-col gap-3">
                    <!-- Live Chat Card -->
                    <div
                        class="flex items-center gap-4 p-4 rounded-xl bg-primary text-white shadow-lg shadow-primary/20 relative overflow-hidden group cursor-pointer">
                        <div class="absolute right-0 top-0 h-full w-1/3 bg-white/5 skew-x-12 translate-x-4"></div>
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                            <span class="material-symbols-outlined" style="font-size: 24px;">chat</span>
                        </div>
                        <div class="flex flex-col flex-1">
                            <span class="text-base font-bold">Start Live Chat</span>
                            <div class="flex items-center gap-2 mt-0.5">
                                <span class="flex h-2 w-2 rounded-full bg-green-400"></span>
                                <span class="text-xs font-medium text-white/80">Available now • Wait &lt; 1 min</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined" style="font-size: 24px;">arrow_forward</span>
                    </div>
                    <!-- Phone Card -->
                    <div
                        class="flex items-center gap-4 p-4 rounded-xl border border-gray-200 dark:border-[#324467] bg-white dark:bg-surface-dark-support cursor-pointer hover:bg-gray-50 dark:hover:bg-[#232f48] transition-colors">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-background-light dark:bg-background-dark text-gray-900 dark:text-white">
                            <span class="material-symbols-outlined" style="font-size: 24px;">call</span>
                        </div>
                        <div class="flex flex-col flex-1">
                            <span class="text-gray-900 dark:text-white text-base font-bold">Call Support</span>
                            <span class="text-xs text-secondary-text">Mon-Fri 9am-5pm EST</span>
                        </div>
                        <div class="text-secondary-text">
                            <span class="material-symbols-outlined" style="font-size: 24px;">chevron_right</span>
                        </div>
                    </div>
                    <!-- Email Card -->
                    <div
                        class="flex items-center gap-4 p-4 rounded-xl border border-gray-200 dark:border-[#324467] bg-white dark:bg-surface-dark-support cursor-pointer hover:bg-gray-50 dark:hover:bg-[#232f48] transition-colors">
                        <div
                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-background-light dark:bg-background-dark text-gray-900 dark:text-white">
                            <span class="material-symbols-outlined" style="font-size: 24px;">mail</span>
                        </div>
                        <div class="flex flex-col flex-1">
                            <span class="text-gray-900 dark:text-white text-base font-bold">Email Us</span>
                            <span class="text-xs text-secondary-text">For general inquiries</span>
                        </div>
                        <div class="text-secondary-text">
                            <span class="material-symbols-outlined" style="font-size: 24px;">chevron_right</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-2 bg-gray-100 dark:bg-[#111722]/50 w-full mb-6"></div>
            <!-- FAQ Accordion List -->
            <div class="px-4 pb-8">
                <div class="flex justify-between items-end pb-4">
                    <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">
                        Common
                        Questions</h2>
                    <a class="text-primary text-sm font-semibold" href="#">View all</a>
                </div>
                <div class="space-y-1">
                    <!-- Item 1 -->
                    <details
                        class="group bg-white dark:bg-surface-dark-support rounded-xl overflow-hidden border border-gray-200 dark:border-[#324467]">
                        <summary
                            class="flex cursor-pointer items-center justify-between p-4 text-gray-900 dark:text-white font-medium list-none">
                            <span>How do I view my statement?</span>
                            <span class="transition group-open:rotate-180">
                                <span class="material-symbols-outlined text-secondary-text"
                                    style="font-size: 24px;">expand_more</span>
                            </span>
                        </summary>
                        <div class="px-4 pb-4 text-secondary-text text-sm leading-relaxed">
                            To view your statement, go to the "Accounts" tab, select your account, and tap on
                            "Statements &amp; Documents". You can download PDFs from there.
                        </div>
                    </details>
                    <!-- Item 2 -->
                    <details
                        class="group bg-white dark:bg-surface-dark-support rounded-xl overflow-hidden border border-gray-200 dark:border-[#324467] mt-3">
                        <summary
                            class="flex cursor-pointer items-center justify-between p-4 text-gray-900 dark:text-white font-medium list-none">
                            <span>What are international transaction fees?</span>
                            <span class="transition group-open:rotate-180">
                                <span class="material-symbols-outlined text-secondary-text"
                                    style="font-size: 24px;">expand_more</span>
                            </span>
                        </summary>
                        <div class="px-4 pb-4 text-secondary-text text-sm leading-relaxed">
                            Our standard international transaction fee is 1% of the transaction amount. Premium account
                            holders may have this fee waived.
                        </div>
                    </details>
                    <!-- Item 3 -->
                    <details
                        class="group bg-white dark:bg-surface-dark-support rounded-xl overflow-hidden border border-gray-200 dark:border-[#324467] mt-3">
                        <summary
                            class="flex cursor-pointer items-center justify-between p-4 text-gray-900 dark:text-white font-medium list-none">
                            <span>How do I change my transfer limit?</span>
                            <span class="transition group-open:rotate-180">
                                <span class="material-symbols-outlined text-secondary-text"
                                    style="font-size: 24px;">expand_more</span>
                            </span>
                        </summary>
                        <div class="px-4 pb-4 text-secondary-text text-sm leading-relaxed">
                            Navigate to Settings &gt; Transfers &gt; Limits. You can request a temporary or permanent
                            increase which will be reviewed within 24 hours.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer-navbar')
</body>

</html>
