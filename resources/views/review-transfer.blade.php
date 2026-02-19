<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Banking Dashboard</title>
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
    <style>
        .pin-input {
            width: 48px;
            height: 48px;
            text-align: center;
            font-size: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(0, 0, 0, 0.5);
            border-radius: 0.75rem;
            color: black;
        }
    </style>
    <script src="/js/general-theme.js"></script>

</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen font-display text-white selection:bg-primary/30">
    <div
        class="max-w-[430px] mx-auto min-h-screen flex flex-col bg-background-light dark:bg-background-dark shadow-2xl relative">
        <!-- TopAppBar -->
        <nav
            class="flex items-center bg-background-light dark:bg-background-dark p-4 pb-2 sticky top-0 z-10 border-b border-white/5">
            <div class="text-slate-900 dark:text-white flex size-12 shrink-0 items-center justify-start cursor-pointer">
                <span class="material-symbols-outlined">arrow_back_ios</span>
            </div>
            <h2
                class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-12">
                Review Transfer</h2>
        </nav>
        <div class="flex-1 overflow-y-auto px-4 pb-32">
            <!-- Amount Section -->
            <div class="py-8 text-center">
                <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium mb-1">Total Transfer Amount</p>
                <h1 class="text-slate-900 dark:text-white text-4xl font-extrabold tracking-tight">$1,250.00</h1>
            </div>
            <!-- Recipient Card -->
            <div
                class="bg-white dark:bg-[#1a2130] rounded-xl p-4 mb-6 shadow-sm border border-slate-200 dark:border-white/5">
                <div class="flex items-center gap-4">
                    <div class="size-14 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-3xl">account_balance</span>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-slate-900 dark:text-white text-base font-bold leading-tight">Bank of America</p>
                        <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-normal">John Doe • **** 1234</p>
                    </div>
                </div>
            </div>
            <!-- Transaction Summary List -->
            <div class="mb-8">
                <h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] mb-4">
                    Transaction Details</h3>
                <div class="bg-white dark:bg-[#1a2130] rounded-xl p-4 border border-slate-200 dark:border-white/5">
                    <div class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                        <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Bank Name</p>
                        <p class="text-slate-900 dark:text-white text-sm font-semibold text-right">Bank of America</p>
                    </div>
                    <div class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                        <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Account Name</p>
                        <p class="text-slate-900 dark:text-white text-sm font-semibold text-right">John Doe</p>
                    </div>
                    <div class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                        <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Account Number</p>
                        <p class="text-slate-900 dark:text-white text-sm font-semibold text-right">**** **** 1234</p>
                    </div>
                    <div class="flex justify-between gap-x-6 py-3 border-b border-slate-100 dark:border-white/5">
                        <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Purpose</p>
                        <p class="text-slate-900 dark:text-white text-sm font-semibold text-right">Monthly Rent</p>
                    </div>
                    <div class="flex justify-between gap-x-6 py-3">
                        <p class="text-slate-500 dark:text-[#92a4c9] text-sm font-medium">Transaction Fee</p>
                        <p class="text-emerald-500 text-sm font-bold text-right">FREE</p>
                    </div>
                </div>
            </div>
            <!-- PIN Input Section -->
            <div class="flex justify-center gap-3">
                <input
                    class="pin-input pin text-late-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    maxlength="1" type="password" inputmode="numeric" />
                <input
                    class="pin-input pin text-slate-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    maxlength="1" type="password" inputmode="numeric" />
                <input
                    class="pin-input pin text-slate-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    maxlength="1" type="password" inputmode="numeric" />
                <input
                    class="pin-input pin text-slate-900 dark:text-white dark:border-slate-600 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    maxlength="1" type="password" inputmode="numeric" />
            </div>

            <input class="hidden" id="pin" name="pin">

        </div>
        <!-- Security Badge -->
        <div class="flex items-center justify-center gap-2 mb-8 opacity-60">
            <span class="material-symbols-outlined text-sm">lock</span>
            <p class="text-slate-500 dark:text-[#92a4c9] text-xs font-semibold uppercase tracking-widest">End-to-End
                Encrypted</p>
        </div>
    </div>
    <!-- Footer Action -->
    <div
        class="fixed bottom-0 left-0 right-0 max-w-[430px] mx-auto p-4 bg-background-light dark:bg-background-dark/80 backdrop-blur-lg border-t border-slate-200 dark:border-white/5 pb-8">
        <button
            class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 active:scale-[0.98]">
            <span>Send Money</span>
            <span class="material-symbols-outlined">send</span>
        </button>
        <div class="h-1 w-32 bg-slate-300 dark:bg-white/20 rounded-full mx-auto mt-6"></div>
    </div>
    </div>
    <script>
        const pins = document.querySelectorAll('.pin');

        pins.forEach((input, index) => {

            input.addEventListener('input', () => {
                // Allow only numbers
                input.value = input.value.replace(/\D/g, '');

                if (input.value && index < pins.length - 1) {
                    pins[index + 1].focus();
                }
            });


            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !input.value && index > 0) {
                    pins[index - 1].focus();
                }
            });

        });
        const pinFormInput = document.getElementById('pin');
        pinFormInput.value = [...pins].map(p => p.value).join('');
    </script>

</body>

</html>