<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Deposit Funds </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/output.css">
    <script src="/js/general-theme.js"></script>
 
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen flex flex-col">
    <header
        class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md px-4 py-3 flex items-center justify-between border-b border-slate-200 dark:border-slate-800">
        <a href="{{ route('user.dashboard') }}"
            class="flex items-center justify-center p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors">
            <span class="material-symbols-outlined text-2xl">arrow_back_ios</span>
        </a>
        <h1 class="text-lg font-bold tracking-tight">Deposit Funds</h1>
        <button
            class="flex items-center justify-center p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors">
            <span class="material-symbols-outlined text-2xl">help_outline</span>
        </button>
    </header>
    <main class="flex-1 overflow-y-auto custom-scrollbar">
        <div class="px-4 pt-6 pb-2">
            <h2 class="text-2xl font-extrabold leading-tight">Choose a deposit method</h2>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Select your preferred way to fund your account
            </p>
        </div>
        <div class="px-4 py-4 space-y-4">
            <details
                class="rounded-xl bg-white dark:bg-[#192233] border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-4 cursor-pointer outline-none">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-2xl">currency_bitcoin</span>
                        </div>
                        <div>
                            <p class="text-base font-bold">Crypto</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">BTC, ETH, USDT</p>
                        </div>
                    </div>
                    <span
                        class="material-symbols-outlined text-slate-400 expand-icon transition-transform">expand_more</span>
                </summary>
                <div class="p-4 bg-slate-50 dark:bg-[#1c273d] border-t border-slate-100 dark:border-slate-700">
                    <div class="flex flex-col items-center gap-6 py-2">
                        <div class="bg-white p-3 rounded-xl shadow-lg border border-slate-100">
                            <div class="w-40 h-40 bg-center bg-no-repeat bg-cover rounded-lg"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDnk2vqWKuIAFuVRkgVMRH85hOMRiKeaTCglPmc4PvHG6QpDPpDSTAD-CTKfLpAuNs9UjYHFlz1fCutFKu6_-5Lu66EQxv_ZpfomnAx4qMU7Z5ywOKAtpbgNednY2FvOAFsfTR4BS5UeO7XBFEoebJ2GZcQpvvd4moCZ-Uy-MJvKEFr4lIQxAoN6Nwec2rlHVDm3wIHxy6ZoxkoDLAP2PUP12YDJ8vBpfIQOji0LaO5RshhdtykxSjCOFXN3pYnjaI4ofI_zYyBz_U");'>
                            </div>
                        </div>
                        <div class="w-full space-y-2">
                            <p
                                class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider px-1">
                                BTC Wallet Address</p>
                            <div
                                class="flex items-center gap-2 bg-white dark:bg-[#101622] p-3 rounded-lg border border-slate-200 dark:border-slate-800">
                                <code
                                    class="text-sm font-mono flex-1 truncate text-primary">bc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh</code>
                                <button
                                    class="flex items-center gap-1 text-primary hover:bg-primary/10 px-2 py-1 rounded transition-colors">
                                    <span class="material-symbols-outlined text-lg">content_copy</span>
                                </button>
                            </div>
                        </div>
                        <p class="text-center text-[11px] text-slate-500 px-4">Ensure you only send Bitcoin (BTC) to
                            this address. Sending other assets may result in permanent loss.</p>
                    </div>
                </div>
            </details>
            <details
                class="rounded-xl bg-white dark:bg-[#192233] border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-4 cursor-pointer outline-none">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300">
                            <span class="material-symbols-outlined text-2xl">account_balance</span>
                        </div>
                        <div>
                            <p class="text-base font-bold">Bank Transfer</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">1-3 business days</p>
                        </div>
                    </div>
                    <span
                        class="material-symbols-outlined text-slate-400 expand-icon transition-transform">expand_more</span>
                </summary>
                <div
                    class="p-4 bg-slate-50 dark:bg-[#1c273d] border-t border-slate-100 dark:border-slate-700 space-y-3">
                    <div
                        class="flex justify-between items-center bg-white dark:bg-background-dark/50 p-3 rounded-lg border border-slate-100 dark:border-slate-800">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase font-bold text-slate-400">Account Name</span>
                            <span class="text-sm font-semibold">JOHN DOE ENTERPRISE</span>
                        </div>
                        <button class="p-1 text-primary"><span
                                class="material-symbols-outlined text-xl">content_copy</span></button>
                    </div>
                    <div
                        class="flex justify-between items-center bg-white dark:bg-background-dark/50 p-3 rounded-lg border border-slate-100 dark:border-slate-800">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase font-bold text-slate-400">Account Number / IBAN</span>
                            <span class="text-sm font-semibold">GB 49 CHAS 6016 1331 9268 19</span>
                        </div>
                        <button class="p-1 text-primary"><span
                                class="material-symbols-outlined text-xl">content_copy</span></button>
                    </div>
                    <div
                        class="flex justify-between items-center bg-white dark:bg-background-dark/50 p-3 rounded-lg border border-slate-100 dark:border-slate-800">
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase font-bold text-slate-400">SWIFT / BIC Code</span>
                            <span class="text-sm font-semibold">CHASGB2LXXXX</span>
                        </div>
                        <button class="p-1 text-primary"><span
                                class="material-symbols-outlined text-xl">content_copy</span></button>
                    </div>
                </div>
            </details>
            <details
                class="rounded-xl bg-white dark:bg-[#192233] border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-4 cursor-pointer outline-none">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-lg overflow-hidden flex items-center justify-center">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCJuHiWUxouda2ffXSuGYM4bMovCFhseKGojM0bP9fj4eSWWoxi_y69V9bRgvWttHBET9ErKXJCo0dIIWCbDxBjkviR1VqyHxGw-FJfLfZEHgVR1C3rSnUvvJmHzvYKg_kDy5RIulDKZMdBXnwLNHeiHwlzWb2seaQcElsLTKNxqos8HcXksuDuR2OfVRgGHg47fUWLCkrUbEHvrUjoaKznMkTTHtkfNts1WOI9ti4z-LGc1tsabC-pb2iVkzl9lgXwUKeS_V9qUiU");'>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-bold">PayPal</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Instant deposit</p>
                        </div>
                    </div>
                    <span
                        class="material-symbols-outlined text-slate-400 expand-icon transition-transform">expand_more</span>
                </summary>
                <div
                    class="p-6 bg-slate-50 dark:bg-[#1c273d] border-t border-slate-100 dark:border-slate-700 text-center">
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Link your account to transfer funds
                        instantly.</p>
                    <button
                        class="w-full bg-primary/10 text-primary font-bold py-3 rounded-lg flex items-center justify-center gap-2">
                        Connect Account <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </button>
                </div>
            </details>
            <details
                class="rounded-xl bg-white dark:bg-[#192233] border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-4 cursor-pointer outline-none">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-lg overflow-hidden flex items-center justify-center">
                            <div class="w-full h-full bg-center bg-no-repeat bg-cover"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_qeEz2mDiB-BCseIKI78c413cycS0oDUdLznLf5DFk4a_3eHCTvjSp73Ws6D2Bvuhykl5Lyx6ny-WPPJOGsflmGf_U4pDQcZmHTM2x07PEdXh0xhQApA6GJ8UfDJ8MRHlrrylcOPtlsI7cgogHvQTQ73nDBA_E_aWoSzXSfqwHC_Q1BVU78MNMw_L9PTX7TOz0XdXkVvTA5G47wQi8V5DGChx19pEbwR4VLeJkXerp670J3AHFgKkGd_mdOuVf5DSxjmOba5ErKg");'>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-bold">CashApp</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Fast mobile pay</p>
                        </div>
                    </div>
                    <span
                        class="material-symbols-outlined text-slate-400 expand-icon transition-transform">expand_more</span>
                </summary>
                <div
                    class="p-6 bg-slate-50 dark:bg-[#1c273d] border-t border-slate-100 dark:border-slate-700 text-center">
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Complete your deposit via the mobile app.
                    </p>
                    <button
                        class="w-full bg-[#00D036]/10 text-[#00D036] font-bold py-3 rounded-lg flex items-center justify-center gap-2">
                        Pay with App <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </button>
                </div>
            </details>
            <details
                class="rounded-xl bg-white dark:bg-[#192233] border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden group">
                <summary class="flex items-center justify-between p-4 cursor-pointer outline-none">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-lg flex items-center justify-center text-slate-600 dark:text-slate-300">
                            <span class="material-symbols-outlined text-2xl">payments</span>
                        </div>
                        <div>
                            <p class="text-base font-bold">Wire Transfer</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">International, 3-5 days</p>
                        </div>
                    </div>
                    <span
                        class="material-symbols-outlined text-slate-400 expand-icon transition-transform">expand_more</span>
                </summary>
                <div
                    class="p-4 bg-slate-50 dark:bg-[#1c273d] border-t border-slate-100 dark:border-slate-700 space-y-4">
                    <div
                        class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-100 dark:border-blue-800 flex gap-3">
                        <span class="material-symbols-outlined text-blue-500">info</span>
                        <p class="text-xs text-blue-700 dark:text-blue-300">Contact support to receive specific wire
                            instructions for your region.</p>
                    </div>
                    <button
                        class="w-full py-3 border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-xl text-slate-500 dark:text-slate-400 font-bold text-sm">
                        Generate Wire ID
                    </button>
                </div>
            </details>
        </div>
        <div class="px-6 py-8 text-center space-y-4">
            <p class="text-xs text-slate-400 dark:text-slate-500">
                Transactions are subject to our terms of service. Banks may charge additional fees for international
                transfers.
            </p>
            <div class="flex items-center justify-center gap-2 text-slate-400">
                <span class="material-symbols-outlined text-sm">lock</span>
                <span class="text-[10px] uppercase font-bold tracking-widest">End-to-End Encrypted</span>
            </div>
        </div>
    </main>
    <div class="p-4 bg-background-light dark:bg-background-dark border-t border-slate-200 dark:border-slate-800">
        <button
            class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl transition-all shadow-lg active:scale-[0.98]">
            Done
        </button>
    </div>

</body>

</html>