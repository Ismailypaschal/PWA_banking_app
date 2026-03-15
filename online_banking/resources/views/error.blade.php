<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Error</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>

</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen flex flex-col antialiased">
    <!-- Top Navigation Bar -->
    <div
        class="sticky top-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-4 py-3 flex items-center justify-between border-b border-gray-200 dark:border-gray-800">
        <button class="p-2 -ml-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
            <span class="material-symbols-outlined block">arrow_back_ios_new</span>
        </button>
        <h1 class="text-base font-bold tracking-tight">System Status</h1>
        <div class="w-10"></div> <!-- Spacer for balance -->
        <div>
            <p class="text-red-600 text-x2">
                <%= error.message %>
            </p>
        </div>
    </div>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col items-center justify-center px-6 py-12">
        <!-- Illustration Section -->
        <div class="w-full max-w-sm mb-10">
            <div class="relative aspect-square flex items-center justify-center">
                <!-- Decorative Glow -->
                <div class="absolute w-48 h-48 bg-primary/20 rounded-full blur-3xl"></div>
                <!-- Custom "Broken Connection" Graphic Replacement -->
                <div class="relative z-10 flex flex-col items-center">
                    <div class="bg-primary/10 p-8 rounded-full border border-primary/20">
                        <span class="material-symbols-outlined text-primary !text-7xl">wifi_off</span>
                    </div>
                    <!-- Small accent icon -->
                    <div class="absolute -top-2 -right-2 bg-red-500 text-white p-2 rounded-full shadow-lg">
                        <span class="material-symbols-outlined !text-xl">priority_high</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Text Content -->
        <div class="text-center space-y-4 max-w-xs">
            <h2 class="text-2xl font-extrabold tracking-tight">Oops! Something's off.</h2>
            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                We're having trouble connecting to our servers. Please check your internet connection or try refreshing
                the page.
            </p>
        </div>
        <!-- Action Buttons -->
        <div class="w-full max-w-xs mt-12 space-y-3">
            <!-- Primary CTA -->
            <button
                class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">refresh</span>
                <span>Refresh Page</span>
            </button>
            <!-- Secondary CTA -->
            <button
                class="w-full bg-gray-200 dark:bg-white/10 hover:bg-gray-300 dark:hover:bg-white/20 text-slate-900 dark:text-white font-bold py-4 px-6 rounded-xl transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Go to Dashboard</span>
            </button>
        </div>
        <!-- Support Link -->
        <button class="mt-8 text-primary font-semibold text-sm hover:underline">
            Contact Support
        </button>
    </main>
    <!-- Bottom Navigation Bar (Inactive for Error State) -->
    <nav class="bg-background-light dark:bg-[#192233] border-t border-gray-200 dark:border-gray-800 px-6 py-3 pb-8">
        <div class="flex items-center justify-between max-w-lg mx-auto opacity-40 grayscale pointer-events-none">
            <div class="flex flex-col items-center gap-1">
                <span class="material-symbols-outlined">home</span>
                <span class="text-[10px] font-medium">Home</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="material-symbols-outlined">sync_alt</span>
                <span class="text-[10px] font-medium">Payments</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="material-symbols-outlined">pie_chart</span>
                <span class="text-[10px] font-medium">Wealth</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="material-symbols-outlined">credit_card</span>
                <span class="text-[10px] font-medium">Cards</span>
            </div>
            <div class="flex flex-col items-center gap-1">
                <span class="material-symbols-outlined">menu</span>
                <span class="text-[10px] font-medium">Menu</span>
            </div>
        </div>
    </nav>
    <!-- Footer Spacer for iOS Home Indicator -->
    <div class="h-5 bg-background-light dark:bg-background-dark"></div>
</body>

</html>