<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Title</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Noto+Sans:wght@300..800&display=swap"
        rel="stylesheet" />

    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />

    <!-- Local Tailwind CSS -->
    <link rel="stylesheet" href="/output.css" />
    <script src="/js/general-theme.js"></script>

</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-gray-900 dark:text-white selection:bg-primary selection:text-white antialiased">
    <div class="relative flex min-h-screen w-full flex-col overflow-hidden pb-24">
        <!-- Header -->
        <header
            class="sticky top-0 z-20 flex items-center justify-between px-4 py-4 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md border-b border-transparent dark:border-gray-800">
            <a href="{{ route('user.dashboard') }}"
                class="flex size-10 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
                <span class="material-symbols-outlined text-gray-900 dark:text-white"
                    style="font-size: 24px;">arrow_back</span>
            </a>
            <h1 class="text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center">Transactions</h1>
            <button
                class="flex size-10 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
                <span class="material-symbols-outlined text-gray-900 dark:text-white"
                    style="font-size: 24px;">download</span>
            </button>
        </header>
        <!-- Main Content -->
        <main class="flex flex-col gap-6 p-4">
            <!-- Search Bar -->
            <div class="relative w-full">
                {{-- <div
                    class="flex w-full items-center rounded-xl h-12 bg-surface-light dark:bg-surface-dark shadow-sm border border-gray-200 dark:border-gray-700 focus-within:ring-2 focus-within:ring-primary focus-within:border-primary transition-all">
                    <div class="flex items-center justify-center pl-4 text-gray-400 dark:text-gray-500">
                        <span class="material-symbols-outlined" style="font-size: 24px;">search</span>
                    </div>
                    <form method="GET" action="{{ route('user.transactions') }}">
                        <div class="-mx-4 flex overflow-x-auto px-4 pb-2 gap-3">

                            <!-- Date Range -->
                            <select name="date" onchange="this.form.submit()"
                                class="h-9 rounded-lg border px-3 bg-surface-light dark:bg-surface-dark">
                                <option value="">Date Range</option>
                                <option value="today" {{ request('date') == 'today' ? 'selected' : '' }}>Today</option>
                                <option value="week" {{ request('date') == 'week' ? 'selected' : '' }}>This Week
                                </option>
                                <option value="month" {{ request('date') == 'month' ? 'selected' : '' }}>This Month
                                </option>
                            </select>

                            <!-- Category -->
                            <select name="category" onchange="this.form.submit()"
                                class="h-9 rounded-lg border px-3 bg-surface-light dark:bg-surface-dark">
                                <option value="">Category</option>
                                <option value="family" {{ request('category') == 'family' ? 'selected' : '' }}>Family
                                </option>
                                <option value="business" {{ request('category') == 'business' ? 'selected' : '' }}>
                                    Business
                                </option>
                                <option value="rent" {{ request('category') == 'rent' ? 'selected' : '' }}>Rent
                                </option>
                                <option value="food" {{ request('category') == 'food' ? 'selected' : '' }}>Food
                                </option>
                                <option value="investment" {{ request('category') == 'investment' ? 'selected' : '' }}>
                                    Investment</option>
                            </select>

                            <!-- Amount -->
                            <select name="amount" onchange="this.form.submit()"
                                class="h-9 rounded-lg border px-3 bg-surface-light dark:bg-surface-dark">
                                <option value="">Amount</option>
                                <option value="highest" {{ request('amount') == 'highest' ? 'selected' : '' }}>Highest
                                </option>
                                <option value="lowest" {{ request('amount') == 'lowest' ? 'selected' : '' }}>Lowest
                                </option>
                            </select>

                            <!-- Status -->
                            <select name="type" onchange="this.form.submit()"
                                class="h-9 rounded-lg border px-3 bg-surface-light dark:bg-surface-dark">
                                <option value="">Status</option>
                                <option value="credit" {{ request('type') == 'credit' ? 'selected' : '' }}>Credit
                                </option>
                                <option value="debit" {{ request('type') == 'debit' ? 'selected' : '' }}>Debit
                                </option>
                            </select>

                        </div>
                    </form>
                </div> --}}
            </div>
            <!-- Profile Stats -->
            <div class="flex flex-wrap gap-3">
                <div
                    class="flex min-w-[140px] flex-1 flex-col items-center justify-center gap-1 rounded-2xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 p-4 shadow-sm">
                    <p class="text-gray-900 dark:text-white text-2xl font-bold tracking-tight">
                        ${{ number_format($totalSpents, 2) }}</p>
                    <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-red-500 text-sm">arrow_downward</span>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Spent</p>
                    </div>
                </div>
                <div
                    class="flex min-w-[140px] flex-1 flex-col items-center justify-center gap-1 rounded-2xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 p-4 shadow-sm">
                    <p class="text-gray-900 dark:text-white text-2xl font-bold tracking-tight">
                        ${{ number_format($totalIncomes, 2) }}</p>
                    <div class="flex items-center gap-1.5">
                        <span
                            class="material-symbols-outlined text-primary dark:text-primary-light text-sm">arrow_upward</span>
                        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Total Income</p>
                    </div>
                </div>
            </div>
            <!-- Filter Chips -->
            {{-- <div class="-mx-4 flex overflow-x-auto px-4 pb-2 scrollbar-hide gap-3">
                <button
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 px-3 active:scale-95 transition-transform">
                    <span class="text-gray-700 dark:text-gray-200 text-sm font-medium whitespace-nowrap">Date
                        Range</span>
                    <span class="material-symbols-outlined text-gray-400" style="font-size: 18px;">expand_more</span>
                </button>
                <button
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary text-white px-3 shadow-md shadow-primary/20 active:scale-95 transition-transform">
                    <span class="text-sm font-medium whitespace-nowrap">Category</span>
                    <span class="material-symbols-outlined" style="font-size: 18px;">expand_more</span>
                </button>
                <button
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 px-3 active:scale-95 transition-transform">
                    <span class="text-gray-700 dark:text-gray-200 text-sm font-medium whitespace-nowrap">Amount</span>
                    <span class="material-symbols-outlined text-gray-400" style="font-size: 18px;">expand_more</span>
                </button>
                <button
                    class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 px-3 active:scale-95 transition-transform">
                    <span class="text-gray-700 dark:text-gray-200 text-sm font-medium whitespace-nowrap">Status</span>
                    <span class="material-symbols-outlined text-gray-400" style="font-size: 18px;">expand_more</span>
                </button>
            </div> --}}

            <form method="GET" action="{{ route('user.transactions') }}">
                <div class="-mx-4 flex overflow-x-auto px-4 pb-2 gap-3">

                    <!-- Date Range -->
                    <select name="date" onchange="this.form.submit()"
                        class="h-9 rounded-lg border bg-surface-light dark:bg-surface-dark">
                        <option value="">Date Range</option>
                        <option value="today" {{ request('date') == 'today' ? 'selected' : '' }}>Today</option>
                        <option value="week" {{ request('date') == 'week' ? 'selected' : '' }}>This Week
                        </option>
                        <option value="month" {{ request('date') == 'month' ? 'selected' : '' }}>This Month
                        </option>
                    </select>

                    <!-- Category -->
                    <select name="category" onchange="this.form.submit()"
                        class="h-9 rounded-lg border px-4 bg-surface-light dark:bg-surface-dark">
                        <option value="">Category</option>
                        <option value="family" {{ request('category') == 'family' ? 'selected' : '' }}>Family
                        </option>
                        <option value="business" {{ request('category') == 'business' ? 'selected' : '' }}>
                            Business
                        </option>
                        <option value="rent" {{ request('category') == 'rent' ? 'selected' : '' }}>Rent
                        </option>
                        <option value="food" {{ request('category') == 'food' ? 'selected' : '' }}>Food
                        </option>
                        <option value="investment" {{ request('category') == 'investment' ? 'selected' : '' }}>
                            Investment</option>
                    </select>

                    <!-- Amount -->
                    <select name="amount" onchange="this.form.submit()"
                        class="h-9 rounded-lg border bg-surface-light dark:bg-surface-dark">
                        <option value="">Amount</option>
                        <option value="highest" {{ request('amount') == 'highest' ? 'selected' : '' }}>Highest
                        </option>
                        <option value="lowest" {{ request('amount') == 'lowest' ? 'selected' : '' }}>Lowest
                        </option>
                    </select>

                    <!-- Status -->
                    <select name="type" onchange="this.form.submit()"
                        class="h-9 rounded-lg border  bg-surface-light dark:bg-surface-dark">
                        <option value="">Status</option>
                        <option value="credit" {{ request('type') == 'credit' ? 'selected' : '' }}>Credit
                        </option>
                        <option value="debit" {{ request('type') == 'debit' ? 'selected' : '' }}>Debit
                        </option>
                    </select>

                </div>
            </form>
            <!-- Transactions List -->
            <div class="flex flex-col gap-6">
                @foreach ($transactions as $date => $dayTransactions)
                    @php
                        $label = \Carbon\Carbon::parse($date)->startOfDay();

                        if ($label->isToday()) {
                            $displayDate = 'Today';
                        } elseif ($label->isYesterday()) {
                            $displayDate = 'Yesterday';
                        } else {
                            $displayDate = $label->format('M d, Y');
                        }
                    @endphp
                    <!-- Section: Today -->
                    <div class="flex flex-col gap-3">
                        <h3 class="text-gray-900 dark:text-white text-lg font-bold leading-tight px-1">
                            {{ $displayDate }}</h3>
                        <!-- Item -->
                        @foreach ($dayTransactions as $transaction)
                            <div
                                class="group flex items-center justify-between gap-4 p-3 rounded-2xl bg-surface-light dark:bg-surface-dark hover:bg-gray-50 dark:hover:bg-[#232d3d] transition-colors cursor-pointer border border-transparent dark:border-gray-800/50">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="flex size-12 items-center justify-center rounded-full bg-gray-100 dark:bg-[#2a3648] text-gray-900 dark:text-white shrink-0">
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
                                    <div class="flex flex-col justify-center">
                                        <p class="text-base font-bold text-gray-900 dark:text-white leading-tight">
                                            {{ $transaction->description }}
                                        </p>
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                            {{ ucfirst($transaction->category) }} •
                                            {{ $transaction->created_at->format('g:i A') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div>
                                        @if ($transaction->type === 'debit')
                                            <p class="text-base font-bold text-red-500 dark:text-red-500">
                                                -${{ number_format($transaction->amount, 2) }}</p>
                                        @else
                                            <p class="text-base font-bold text-green-500 dark:text-green-500">
                                                +${{ number_format($transaction->amount, 2) }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        @if ($transaction->status === 'pending')
                                            <p class="text-xs text-right font-bold text-yellow-500 !text-yellow-500">
                                                {{ $transaction->status }}
                                            </p>
                                        @elseif($transaction->status === 'successful')
                                            <p class="text-xs text-right font-bold text-green-600 dark:text-green-400">
                                                {{ $transaction->status }}</p>
                                        @else
                                            <p class="text-xs text-right font-bold text-red-400 dark:text-red-500">
                                                {{ $transaction->status }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                @if ($transactions->isEmpty())
                    <p class="text-red-500 text-center h-full">No Transaction record found.</p>
                @endif
            </div>
            <!-- Bottom Space for Nav -->
            <div class="h-6"></div>
        </main>
        <!-- Bottom Navigation -->
        @include('partials.footer-navbar')
    </div>
</body>

</html>
