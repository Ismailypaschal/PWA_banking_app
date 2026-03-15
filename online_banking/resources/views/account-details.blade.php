<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Account Details</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Local Tailwind CSS -->
    <link rel="stylesheet" href="/output.css" />
    <script src="/js/general-theme.js"></script>
</head>

<body class="bg-background-light dark:bg-background-dark font-display antialiased">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <!-- TopAppBar -->
        <div
            class="sticky top-0 z-50 flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 justify-between border-b dark:border-gray-800/50 border-gray-200">
            <a href="{{ route('user.dashboard') }}"
                class="text-black dark:text-white flex size-12 shrink-0 items-center justify-start cursor-pointer">
                <span class="material-symbols-outlined" style="font-size: 24px;">arrow_back_ios_new</span>
            </a>
            <h2
                class="text-black dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center">
                Account Details</h2>
            <div class="flex w-12 items-center justify-end">
                <button
                    class="flex items-center justify-center overflow-hidden rounded-lg h-12 bg-transparent text-black dark:text-white min-w-0 p-0">
                    <span class="material-symbols-outlined" style="font-size: 24px;">settings</span>
                </button>
            </div>
        </div>
        <div class="flex flex-col flex-1">
            <!-- Hero Section -->
            <div class="flex flex-col items-center pt-8 pb-6">
                <!-- HeadlineText -->
                <h1
                    class="text-black dark:text-white tracking-tight text-[40px] font-extrabold leading-tight px-4 text-center">
                    ${{ number_format($user->balance, 2, '.', ',') }}
                </h1>
                <!-- MetaText -->
                <div class="flex items-center gap-2 pt-2">
                    <p class="text-gray-500 dark:text-[#92a4c9] text-sm font-medium leading-normal text-center">
                        Available Balance</p>
                    <span
                        class="px-2 py-0.5 rounded-full bg-green-500/10 text-green-600 dark:text-green-400 text-xs font-bold">Active</span>
                </div>
            </div>
            <!-- ActionsBar -->
            <div class="@container mb-8">
                <div class="gap-6 px-4 flex justify-center items-start">
                    <div class="flex flex-col items-center gap-3 text-center cursor-pointer group">
                        <a href="{{ route('user.deposit') }}">
                            <div
                                class="rounded-full bg-primary/10 dark:bg-[#1F2937] group-hover:bg-primary group-hover:text-white transition-colors duration-200 p-4 h-14 w-14 flex items-center justify-center text-primary dark:text-white">
                                <span class="material-symbols-outlined" style="font-size: 24px;">add</span>
                            </div>
                        </a>
                        <p class="text-black dark:text-white text-xs font-semibold leading-normal">Add Money</p>
                    </div>
                    <div class="flex flex-col items-center gap-3 text-center cursor-pointer group">
                        <a href="{{ route('user.transfer') }}">
                            <div
                                class="rounded-full bg-primary/10 dark:bg-[#1F2937] group-hover:bg-primary group-hover:text-white transition-colors duration-200 p-4 h-14 w-14 flex items-center justify-center text-primary dark:text-white">
                                <span class="material-symbols-outlined" style="font-size: 24px;">send</span>
                            </div>
                        </a>
                        <p class="text-black dark:text-white text-xs font-semibold leading-normal">Transfer</p>
                    </div>
                    <div class="flex flex-col items-center gap-3 text-center cursor-pointer group">
                        <a href="{{ route('user.transactions') }}">
                            <div
                                class="rounded-full bg-primary/10 dark:bg-[#1F2937] group-hover:bg-primary group-hover:text-white transition-colors duration-200 p-4 h-14 w-14 flex items-center justify-center text-primary dark:text-white">
                                <span class="material-symbols-outlined" style="font-size: 24px;">description</span>
                            </div>
                        </a>
                        <p class="text-black dark:text-white text-xs font-semibold leading-normal">Statement</p>
                    </div>
                    <div class="flex flex-col items-center gap-3 text-center cursor-pointer group">
                        <a href="{{ route('user.profile') }}">
                            <div
                                class="rounded-full bg-primary/10 dark:bg-[#1F2937] group-hover:bg-primary group-hover:text-white transition-colors duration-200 p-4 h-14 w-14 flex items-center justify-center text-primary dark:text-white">
                                <span class="material-symbols-outlined" style="font-size: 24px;">more_horiz</span>
                            </div>
                        </a>
                        <p class="text-black dark:text-white text-xs font-semibold leading-normal">More</p>
                    </div>
                </div>
            </div>
            <!-- Section: Account Essentials -->
            <div class="px-4 mb-6">
                <h3 class="text-black dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] pb-3">Account
                    Essentials</h3>
                <div
                    class="flex flex-col bg-white dark:bg-[#151b26] rounded-xl overflow-hidden shadow-sm dark:shadow-none border border-gray-100 dark:border-gray-800">
                    <!-- List Item 1 -->
                    <div class="flex items-center justify-between p-4 border-b border-gray-100 dark:border-gray-800">
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-500 dark:text-[#92a4c9] text-xs font-medium">Account Name</p>
                            <p class="text-black dark:text-white text-base font-semibold">{{ $user->first_name }}
                                {{ $user->last_name }}</p>
                        </div>
                        <button class="text-primary text-sm font-bold">Edit</button>
                    </div>
                    <!-- List Item 2 -->
                    <div class="flex items-center justify-between p-4 border-b border-gray-100 dark:border-gray-800">
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-500 dark:text-[#92a4c9] text-xs font-medium">Account Number</p>
                            <div class="flex items-center gap-2">
                                <p class="text-black dark:text-white text-base font-semibold font-mono tracking-wide">
                                    {{ $account->account_number }}</p>
                                <button
                                    class="text-gray-400 hover:text-primary dark:hover:text-white transition-colors">
                                    <span class="material-symbols-outlined" style="font-size: 18px;">visibility</span>
                                </button>
                            </div>
                        </div>
                        <button class="text-primary hover:text-primary/80 transition-colors p-2">
                            <span class="material-symbols-outlined" style="font-size: 20px;">content_copy</span>
                        </button>
                    </div>
                    <!-- List Item 3 -->
                    <div class="flex items-center justify-between p-4">
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-500 dark:text-[#92a4c9] text-xs font-medium">Routing Number</p>
                            <p class="text-black dark:text-white text-base font-semibold font-mono tracking-wide">021
                                000 234</p>
                        </div>
                        <button class="text-primary hover:text-primary/80 transition-colors p-2">
                            <span class="material-symbols-outlined" style="font-size: 20px;">content_copy</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Section: Rates & Benefits -->
            <div class="px-4 mb-6">
                <h3 class="text-black dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] pb-3">Rates
                    &amp; Benefits</h3>
                <div class="grid grid-cols-2 gap-3">
                    <div
                        class="bg-white dark:bg-[#151b26] p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex flex-col gap-1">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="p-1.5 rounded-md bg-green-500/10 text-green-500">
                                <span class="material-symbols-outlined block"
                                    style="font-size: 18px;">trending_up</span>
                            </div>
                            <span class="text-gray-500 dark:text-[#92a4c9] text-xs font-medium">Current APY</span>
                        </div>
                        <p class="text-black dark:text-white text-xl font-bold">4.25%</p>
                    </div>
                    <div
                        class="bg-white dark:bg-[#151b26] p-4 rounded-xl border border-gray-100 dark:border-gray-800 flex flex-col gap-1">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="p-1.5 rounded-md bg-primary/10 text-primary">
                                <span class="material-symbols-outlined block" style="font-size: 18px;">savings</span>
                            </div>
                            <span class="text-gray-500 dark:text-[#92a4c9] text-xs font-medium">YTD Interest</span>
                        </div>
                        <p class="text-black dark:text-white text-xl font-bold">$124.50</p>
                    </div>
                </div>
            </div>
            <!-- Section: Linked Cards -->
            <div class="px-4 mb-8">
                <div class="flex items-center justify-between pb-3">
                    <h3 class="text-black dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Linked
                        Cards</h3>
                    <button class="text-primary text-sm font-bold">Manage</button>
                </div>
                <div class="overflow-x-auto pb-4 -mx-4 px-4 flex gap-4 scrollbar-hide">
                    <!-- Card 1: Primary -->
                    <div class="relative w-[300px] h-[190px] shrink-0 rounded-2xl overflow-hidden group shadow-lg">
                        <!-- Abstract Gradient Background -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-[#1152d4] to-[#0a2e7a] dark:from-[#1152d4] dark:to-[#051a44]">
                        </div>
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-2xl -mr-10 -mt-10">
                        </div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-black/10 rounded-full blur-xl -ml-5 -mb-5">
                        </div>
                        <div class="relative h-full flex flex-col justify-between p-6 z-10">
                            <div class="flex justify-between items-start">
                                <span class="material-symbols-outlined text-white/80"
                                    style="font-size: 32px;">contactless</span>
                                <span class="text-white font-bold italic text-lg tracking-widest">VISA</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-12 h-9 rounded bg-gradient-to-tr from-yellow-200 to-yellow-500 border border-yellow-600/30 flex items-center justify-center">
                                    <div class="w-full h-[1px] bg-black/10"></div>
                                </div>
                                <span class="material-symbols-outlined text-white/80"
                                    style="font-size: 24px;">lock_open</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div class="flex flex-col">
                                    <span class="text-white/60 text-[10px] uppercase tracking-wider mb-1">Card
                                        Number</span>
                                    <p class="text-white font-mono text-lg tracking-widest">•••• 4242</p>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span
                                        class="text-white/60 text-[10px] uppercase tracking-wider mb-1">Expires</span>
                                    <p class="text-white font-medium text-sm">12/28</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" data-alt="Abstract blue gradient representing a credit card"></div>
                    </div>
                    <!-- Card 2: Virtual -->
                    <div
                        class="relative w-[300px] h-[190px] shrink-0 rounded-2xl overflow-hidden group shadow-lg border border-gray-200 dark:border-gray-700">
                        <!-- Glassmorphism Background -->
                        <div class="absolute inset-0 bg-gray-100 dark:bg-[#1a2333]"></div>
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5">
                        </div>
                        <div class="relative h-full flex flex-col justify-between p-6 z-10">
                            <div class="flex justify-between items-start">
                                <span class="material-symbols-outlined text-black/50 dark:text-white/50"
                                    style="font-size: 32px;">contactless</span>
                                <div class="flex items-center gap-1">
                                    <div class="w-4 h-4 rounded-full bg-red-500/80"></div>
                                    <div class="w-4 h-4 rounded-full bg-yellow-500/80 -ml-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span
                                    class="px-2 py-1 rounded bg-black/5 dark:bg-white/10 text-black dark:text-white text-[10px] font-bold uppercase tracking-wider">Virtual</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div class="flex flex-col">
                                    <span
                                        class="text-gray-500 dark:text-gray-400 text-[10px] uppercase tracking-wider mb-1">Card
                                        Number</span>
                                    <p class="text-black dark:text-white font-mono text-lg tracking-widest">•••• 8831
                                    </p>
                                </div>
                                <div class="flex flex-col items-end">
                                    <span
                                        class="text-gray-500 dark:text-gray-400 text-[10px] uppercase tracking-wider mb-1">Expires</span>
                                    <p class="text-black dark:text-white font-medium text-sm">05/26</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" data-alt="Abstract dark grey pattern representing a virtual debit card">
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-10 bg-background-light dark:bg-background-dark"></div>
        </div>
    </div>
</body>

</html>
